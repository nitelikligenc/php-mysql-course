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

<?php

$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$yas = $_POST["yas"];

$hobiler = $_POST["hobi"];

foreach ($hobiler as $hobi){
    echo $hobi;
}

echo $adi . " " . $soyadi ." " . $yas;
print_r($hobiler);

?>

</body>
</html>