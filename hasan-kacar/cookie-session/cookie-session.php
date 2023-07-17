<?php
session_start();
ob_start();

$email = $_POST['email'];
$password = $_POST['password'];

echo $email . " & " . $password;






ob_flush();
ob_clean();