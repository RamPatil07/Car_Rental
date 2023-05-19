<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the credentials (you can replace this with your own validation logic)
  if ($username === "admin" && $password === "password") {
    // Redirect to a success page or perform any other necessary actions
    header("Location: success.html");
    exit();
  } else {
    // Redirect back to the login page with an error message
    header("Location: login.html?error=1");
    exit();
  }
}
?>
