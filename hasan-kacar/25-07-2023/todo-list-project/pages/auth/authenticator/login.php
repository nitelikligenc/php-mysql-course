<?php
require_once '../../../base.php';
session_start();
ob_start();

$email = $_POST['email'];
$password = $_POST['password'];
$encryptedPassword = md5($password);

$userControlSql = "SELECT * FROM user WHERE email='$email' AND password='$encryptedPassword'";
$userControl = $connection->query($userControlSql);
$user = $userControl->fetch_assoc();

if(count($user) > 0){
    $_SESSION['user'] = $user["id"];
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/todo/list.php");
    exit();
}else{
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/auth/loginUi.php");
    exit();
}


ob_flush();
ob_clean();
