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

//trait KisiBir{
//    public $ad;
//    public $soyad;
//    private function Goster(){
//        return "Kisi Bir";
//    }
//}
//trait KisiIki{
//    public $yas;
//
//    public function Goster(){
//        return "Kisi iki ";
//    }
//}
//
//class Personel{
//    use KisiBir,KisiIki{
//        KisiIki::Goster insteadof KisiBir;
//        KisiBir::Goster as GosterBir;
//    }
//}
//
//$personel = new Personel();
//echo $personel->GosterBir();


trait Kisi{
    abstract public function Goster2();
}


class Personel{
    use Kisi;
}

$personel = new Personel();

?>

</body>
</html>