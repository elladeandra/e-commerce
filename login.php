<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="login-page">
  <div class="login-card">
    <h2>Login</h2>
    <form id="loginForm">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>

  <script>
    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(e) {
      e.preventDefault(); // stop normal submission for demo

      // Trigger clapping animation
      for (let i = 0; i < 20; i++) {
        let clap = document.createElement("div");
        clap.classList.add("clap");
        clap.textContent = "👏";
        clap.style.left = Math.random() * 100 + "vw";
        clap.style.animationDuration = (2 + Math.random() * 2) + "s";
        clap.style.fontSize = (1 + Math.random() * 2) + "rem";
        document.body.appendChild(clap);

        setTimeout(() => clap.remove(), 4000);
      }

      // Redirect after animation (4s delay)
      setTimeout(() => {
        window.location.href = "../index.php";
      }, 4000);
    });
  </script>
</body>
</html>
