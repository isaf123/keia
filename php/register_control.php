<?php
require 'db.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
if (!$name || !$email || !$password || !$repassword) {
  echo "
  <script>
    alert('please fill all field');
    window.location.href = 'register.php';
  </script>";
  exit;
}

$hashing = password_hash($password, PASSWORD_DEFAULT);

if ($password !== $repassword) {
  echo "
  <script>
    alert('Password dan Re-password tidak sama!');
    window.location.href = 'register.php';
  </script>";
  exit;
}

$query = $conn->query("INSERT into user (name,email,password)
	values ('$name','$email','$hashing');");
echo "<script>window.location.href = 'login.php';</script>";
