<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My E-Commerce Platform</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="hero">
    <h1>Welcome to the E-Commerce Platform</h1>
    <p id="slogan">Your one-stop shop for everything you need</p>
    <nav>
      <a href="view/register.php">Register</a> |
      <a href="view/login.php">Login</a>
    </nav>
  </div>

  <script>
    // Wait for slogan animation (2s + 0.5s delay = 2.5s)
    setTimeout(() => {
      // Drop 20 shopping bags
      for (let i = 0; i < 20; i++) {
        let bag = document.createElement("div");
        bag.classList.add("fall");
        bag.textContent = "🛍️";
        bag.style.left = Math.random() * 100 + "vw"; // random horizontal
        bag.style.animationDuration = (3 + Math.random() * 2) + "s"; // random speed
        bag.style.fontSize = (1 + Math.random() * 2) + "rem"; // random size
        document.body.appendChild(bag);

        // Remove after animation
        setTimeout(() => bag.remove(), 5000);
      }
    }, 2500); // start after slogan finishes
  </script>
</body>
</html>
