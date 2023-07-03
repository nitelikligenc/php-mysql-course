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


// Extends Bir sınıf başka bir sınıftan türetmek istediğimizde kullanılır.
//Final En son kullanılan sınıftir ve türeyen son sınıf anlamına gelir.Ayrıca methodlar üzerindede kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı method adı kullanılamaz.


//class Bir{
//    public $adi = "Ramazan";
//
//}
//
//class iki extends Bir{
//
//}
//
//$classIki = new iki();
//
//$classIki->adi;

class DenemeBir
{

    protected $adi = "Ramazan";

}

class DenemeIki extends DenemeBir
{

    public function getAdi()
    {
        return $this->adi;
    }
}

$denemeiki = new DenemeIki();
echo $denemeiki->getAdi();
?>
</body>
</html>