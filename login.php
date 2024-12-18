<?php
// Mock user credentials for demonstration
$valid_username = "admin";
$valid_password = "password123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);

  // Validate credentials
  if ($username === $valid_username && $password === $valid_password) {
    // Redirect to the next page
    header("Location: welcome.html");
    exit();
  } else {
    // Show an error message
    echo "<script>
            alert('Invalid username or password.');
            window.history.back();
          </script>";
    exit();
  }
} else {
  // Redirect back to login form if accessed directly
  header("Location: index.html");
  exit();
}
?>
