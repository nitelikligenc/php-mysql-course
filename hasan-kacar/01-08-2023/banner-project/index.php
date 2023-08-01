<?php

$hostName = 'localhost';
$username = 'root';
$password = 'root';
$dbName = 'php_education';

try{
    $pdo = new PDO("mysql:host=$hostName;dbname=$dbName", $username, $password);
}catch(Exception $e){
    echo $e->getMessage();
    die();
}

$sql = "SELECT * FROM banner ORDER BY gosterim_sayisi ASC LIMIT 1";
$query = $pdo->prepare($sql);
$query->execute();

$banner = $query->fetch(PDO::FETCH_ASSOC);

$bannerGosterimSayisi = $banner["gosterim_sayisi"];
$bannerId = $banner["id"];
$bannerFilePath = $banner["file_path"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banner Project</title>
</head>
<body>
    <div style="margin-top: 5rem; text-align: center">
        <img src="<?php echo $bannerFilePath; ?>" alt="">
    </div>
</body>
</html>

<?php
$updateSql = "UPDATE banner SET gosterim_sayisi=? WHERE id = ? ";
$query = $pdo->prepare($updateSql);
$query->execute([$bannerGosterimSayisi + 1, $bannerId]);


?>


