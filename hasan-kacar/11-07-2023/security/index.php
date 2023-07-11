<?php

$email = $_POST['email_content'];
$password = $_POST['password_content'];
$isApproved = $_POST['is_approved'];


if (empty($email) || empty($password) || empty($isApproved)){
    header('Location: http://localhost:8888/php-mysql-course/hasan-kacar/11-07-2023/security/form.php?state=required');
    exit();
}

$isMailTrue = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($isMailTrue){
    echo "Mail doğru";
}else{
    header('Location: http://localhost:8888/php-mysql-course/hasan-kacar/11-07-2023/security/form.php?state=false_email');
    exit();
}


echo $email . "<br>";
echo $password . "<br>";
echo $isApproved . "<br>";
