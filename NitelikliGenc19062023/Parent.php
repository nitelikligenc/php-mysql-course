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

class Bir{
    public function deneme(){
        return "Bir";
    }
}

class Iki extends Bir {
    public function deneme(){
        return "iki";
    }
}

class Uc extends Iki{
    public function deneme(){
        return "uc";
    }

    public function diziDondur(){
        return ["birinci" => Bir::Deneme(),"ikinci" => Iki::Deneme(),"üçüncü" => Uc::Deneme()];
    }
}


$ucClass = new Uc();

print_r($ucClass->diziDondur());


?>

</body>
</html>