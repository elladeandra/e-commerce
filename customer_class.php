<?php
require_once(__DIR__ . '/../settings/db_connection.php');

class Customer extends DB_Connection {

    public function add_customer($name, $email, $password, $country, $city, $contact, $role = 2) {
        $conn = $this->connect();

        // Check if email already exists
        $check_sql = "SELECT * FROM customer WHERE customer_email = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->execute([$email]);

        if ($check_stmt->rowCount() > 0) {
            return "Email already exists";
        }

        // Encrypt password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new customer
        $sql = "INSERT INTO customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$name, $email, $hashed_password, $country, $city, $contact, $role]);

        return $result ? "success" : "Registration failed";
    }
}
?>
