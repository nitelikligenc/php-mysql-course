<?php

try{
    $hostingName = "localhost";
    $dbName = "php_education";
    $username = "root";
    $password = "root";

    $pdo = new PDO("mysql:host=$hostingName;dbname=$dbName", $username, $password);
}catch(PDOException $e){
    echo "Hata : " . $e->getMessage();
    die();
}

$sqlMakaleler = "SELECT * FROM makale";
$makalelerQuery = $pdo->prepare($sqlMakaleler);
$makalelerQuery->execute();

$makaleler = $makalelerQuery->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="display: flex; max-width: 1000px; margin-left: auto; margin-right: auto">
<?php
foreach ($makaleler as $makale)
{
?>
    <div style="width: 300px; height: auto; border: 1px solid #E9E9E9; margin-left: 15px">
        <div>
            <img style="max-width: 300px; height: auto" src="<?php echo $makale["image"]; ?>" alt="">
        </div>

        <div style="text-align: center; border-bottom: 1px dashed #E9E9E9">
            <h4 style="padding: 5px; margin: 0"><?php echo $makale["title"]; ?></h4>
        </div>

        <div style="text-align: center">
            <p><?php echo $makale["description"]; ?></p>
        </div>

        <div style="text-align: right">
<!--            <form action="detay.php" method="post">-->
<!--                <input type="hidden" name="makale_id" value="--><?php //echo $makale["id"]; ?><!--">-->
<!--                <button type="submit">Git</button>-->
<!--            </form>-->
            <a style="" href="detay.php?id=<?php echo $makale["id"]; ?>">İncele</a>
        </div>
    </div>
<?php
}
?>
</div>
</body>
</html>
