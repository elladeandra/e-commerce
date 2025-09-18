<?php
require_once(__DIR__ . '/../classes/customer_class.php');

function register_customer_ctr($name, $email, $password, $country, $city, $contact) {
    $customer = new Customer();
    return $customer->add_customer($name, $email, $password, $country, $city, $contact);
}
?>
