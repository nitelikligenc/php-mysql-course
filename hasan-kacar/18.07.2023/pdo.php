<?php

try{
    $hostingName = "localhost";
    $dbName = "php_education";
    $username = "root";
    $password = "root";

    $pdo = new PDO("mysql:host=$hostingName;dbname=$dbName", $username, $password);

//    if (@$pdo->connect_error) {
//        throw new Exception("Hata");
//    }
}catch(PDOException $e){
    echo "Hata : " . $e->getMessage();
    die();
//    echo "Hata : " . $e->getMessage();
//    die();
}


//echo "Bağalantı Başarılı";
try {
//    $name = "PHP Education 2";
//    $age = 15;
//    $isTeenager = 0;
//
//    $sql = "INSERT INTO user (name, age) VALUES (?, ?)";
//    $query = $pdo->prepare($sql);
//    $result = $query->execute([$name, $age]);

//    echo "Kayıt Veritabanına Eklendi";



//    $sql = "DELETE FROM user WHERE id = ?";
//    $query = $pdo->prepare($sql);
//    $result = $query->execute([4]);
//
//
//    echo "Kayıt Başarıyla Silindi!";





//    $updatingName = "Update Name";
//    $updatingAge = 25;
//    $updatingTeenager = 1;
//
//    $sql = "UPDATE user SET name=?, age=?,isTeenager=? WHERE id = ? ";
//    $query = $pdo->prepare($sql);
//    $result = $query->execute([$updatingName, $updatingAge, $updatingTeenager, 2]);
//
//
//    echo "Kayıt Başarıyla Güncellendi!";










    $sql = "SELECT name, age FROM user WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([3]);
//    $result = $query->execute();
    $allUsers = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($allUsers);
    echo "</pre>";








}catch(PDOException $e){
    echo "PDO Insert Error : " . $e->getMessage();
    die();
}






