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

//Abstract : Belirtilecek olan herhangi bir sınıfı,Soyut sınıf haline dönüştürmek için kullanılır.
//Interface : Belirtilecek olan herhangi bir sınıfı, Soyut arayüz  haline dönüştürmek için kullanılır.
//implements: Daha önceden oluşturulmuş olan herhangi bir soyut arayüz sınıfını ilgili sınıfa tanımlamak / uygulamak için kullanılır.


//Abstract Method
//1. Soyut methodlar içerebilir
//2. Normal methodlar içerebilir.
//3. özellikler içerebilir.
//4. Sabitler içerebilir.
//5. Public,Private,Protected Tanımlanabilir.
//6. Herhangi bir sınıf sadece tek abstracttan türeyebilir.

//Interface
//1. Soyut methodlar içerebilir.
//2. Public görünürlüğe sahip olmak konuşuluyla normal methodlar içerebilir.
//3. Sabitler içerebilir.
//4. Herhangi bir sınıfta birden fazla interface kullanılabilir.
//
//abstract class Deneme{
//    abstract public function tanim($a);
//}
//
//class Kitap extends Deneme{
//
//    public function tanim($a)
//    {
//        // TODO: Implement tanim() method.
//    }
//}
//
//
//

//Ornek 2

//abstract class Tema{
//    abstract public function HeaderAlani();
//    abstract public function FooterAlani();
//    abstract public function SidebarAlani();
//}
//
//class WebSitesi extends Tema{
//
//    public function HeaderAlani()
//    {
//        // TODO: Implement HeaderAlani() method.
//    }
//
//    public function FooterAlani()
//    {
//        // TODO: Implement FooterAlani() method.
//    }
//
//    public function SidebarAlani()
//    {
//        // TODO: Implement SidebarAlani() method.
//    }
//}

//Ornek 3
abstract class Deneme{
    public $isim = "Ramazan";
    private $soyisim = "AKIN";
    protected $yas = 60;
    const OKUL = "SDU";
}

class Uye extends Deneme{

}

?>


</body>
</html>