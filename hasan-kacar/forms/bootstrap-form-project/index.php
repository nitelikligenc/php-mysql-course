<?php

$email = $_POST["email"];
$password = $_POST["password"];

echo "Email : " . $email . "<br>";
echo "Password : " . $password . "<br><br>";

//FİLE
$file = $_FILES["file_input"];
echo "<pre>";
print_r($file);
echo "</pre>";

echo "File Size : " . $file["size"];