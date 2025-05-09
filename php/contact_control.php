<?php
require 'db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!$first_name || !$last_name || !$email || !$phone || !$subject || !$message) {
  echo "
  <script>
    alert('please fill all data');
    window.location.href = 'contact.php';
  </script>";
  exit;
}

$query = $conn->query("INSERT into contact_form(first_name,last_name,email,subject,message,phone)
	values('$first_name','$last_name','$email','$subject','$message','$phone');");

echo "
<script>
  alert('send message succes');
  window.location.href = 'index.php';
</script>";
