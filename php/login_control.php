<?php
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (!$email || !$password) {
  echo "
  <script>
    alert('please fill all field');
    window.location.href = 'login.php';
  </script>
  ";
  exit;
}

$result = $conn->query("SELECT * FROM user where email='$email'");
$data = $result->fetch_assoc();
if (!$result->num_rows) {
  echo "
  <script>
    alert('email atau password salah !');
    window.location.href = 'login.php';
  </script>";
  exit;
}

$verifPass = password_verify($password, $data['password']);
if (!$verifPass) {
  echo "
  <script>
    alert('email atau password salah !');
    window.location.href = 'login.php';
  </script>";
  exit;
}

$name = $data['name'];
echo "<script> window.location.href = 'index.php?$name';</script>";
