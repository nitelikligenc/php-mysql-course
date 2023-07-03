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


//Ornek 1
//interface CRUD{
//    public function Olustur($tabloadi,$id);
//    public function Okuma($tabloadi,$id);
//    public function Guncelleme($tabloadi,$id);
//    public function Silme($tabloadi,$id);
//}
//
//
//class Uye implements CRUD{
//
//    public function Olustur($tabloadi, $id)
//    {
//        // TODO: Implement Olustur() method.
//    }
//
//    public function Okuma($tabloadi, $id)
//    {
//        // TODO: Implement Okuma() method.
//    }
//
//    public function Guncelleme($tabloadi, $id)
//    {
//        // TODO: Implement Guncelleme() method.
//    }
//
//    public function Silme($tabloadi, $id)
//    {
//        // TODO: Implement Silme() method.
//    }
//}


//Ornek 2

interface Olusturma{
    public function Olustur();
}

interface Guncellem{
    public function Guncelle();
}

interface Silme{
    public function Silme();
}

interface Okuma{
    public function Okuma();
}


class Uye implements Olusturma,Okuma,Silme,Guncellem{

    public function Olustur()
    {
        // TODO: Implement Olustur() method.
    }

    public function Guncelle()
    {
        // TODO: Implement Guncelle() method.
    }

    public function Okuma()
    {
        // TODO: Implement Guncelle() method.
    }

    public function Silme()
    {
        // TODO: Implement Guncelle() method.
    }



}

?>

</body>
</html>