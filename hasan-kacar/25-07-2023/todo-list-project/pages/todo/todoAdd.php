<?php
require_once '../../base.php';
session_start();
ob_start();

$todoContent = strip_tags($_POST["todo_content"]);
$user = $_SESSION["user"];

$sql = "INSERT INTO todo (user_id, content, is_read, is_completed) values (?, ?, ?, ?)";
$query = $connection->prepare($sql);
$result = $query->execute([$user, $todoContent, 0, 0]);

if($result){
    //Return list.php with success message
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/todo/list.php");
    exit();
}else{
    //Return list.php with error message
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/todo/list.php");
    exit();
}
