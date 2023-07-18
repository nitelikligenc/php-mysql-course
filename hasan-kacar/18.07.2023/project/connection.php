<?php
try {
    $hostingName = "localhost";
    $dbName = "php_education";
    $username = "root";
    $password = "root";

    $pdo = new PDO("mysql:host=$hostingName;dbname=$dbName", $username, $password);
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
