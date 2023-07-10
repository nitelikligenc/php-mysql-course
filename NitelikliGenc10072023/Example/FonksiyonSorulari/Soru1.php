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

//Aldığı sayıya karşılık gelen ay ismini ekrana yazdıran fonksiyonu yazınız.


//
//function ayGetir($sayi)
//{
//    $aylar = array(
//        "Ocak","Şubat","Mart","Nisan","Mayıs","Haziran" ,"Temmuz","Agust","Eylül","Ekim","Kasım","Aralık"
//    );
//    return $aylar[$sayi-1];
//
//}
//$gelenAY = ayGetir(2);
//echo $gelenAY;
//
//function acilirListe($gelenArray){
//    echo  "<select>";
//    foreach ($gelenArray as $item){
//
//        echo "<option>" . $item . "</option>";
//    }
//    echo "</select>";
//}
//
//$aylar = [
//    "Ocak","Şubat","Mart","Nisan","Mayıs","Haziran" ,"Temmuz","Agust","Eylül","Ekim","Kasım","Aralık"
//];
//
//$kisi = [];
//$liste = acilirListe($aylar);



//Çağırıldığında ekrana 1 ile 100 arasında 10 tane rastgele sayıyı bir diziye aktaran fonksiyonu yazınız.
//function randomSayiGetir(){
//    for ($i = 0 ; $i <= 10; $i ++){
//        $dizi[] = rand(1,100);
//    }
//}
//
//$sayilar = randomSayiGetir();
//print_r($sayilar);
//
//class Urun{
//    public $urunAdi;
//    public $urunFiyati;
//    public $urunKdvOrani;
//
//    public function __construct($adi , $fiyati,$kdv)
//    {
//        $this->urunFiyati = $fiyati;
//        $this->urunAdi = $adi;
//        $this->urunKdvOrani = $kdv;
//    }
//
//    public function kdvOrani()
//    {
//        return $this->urunFiyati * ($this->urunKdvOrani / 100);
//    }
//}
//
//
//$urun = new Urun();
//echo $urun->urunAdi ."<br>";
//echo $urun->urunFiyati ."<br>";
//echo $urun->urunKdvOrani ."<br>";
//
//echo  $urun->kdvOrani();



//
//class Urun{
//    public $urunAdi;
//    public $urunFiyati;
//    public $urunKdvOrani;
//
//    /**
//     * @return mixed
//     */
//    public function getUrunAdi()
//    {
//        return $this->urunAdi;
//    }
//
//    /**
//     * @param mixed $urunAdi
//     */
//    public function setUrunAdi($urunAdi)
//    {
//        $this->urunAdi = $urunAdi;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getUrunFiyati()
//    {
//        return $this->urunFiyati;
//    }
//
//    /**
//     * @param mixed $urunFiyati
//     */
//    public function setUrunFiyati($urunFiyati)
//    {
//        $this->urunFiyati = $urunFiyati;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getUrunKdvOrani()
//    {
//        return $this->urunKdvOrani;
//    }
//
//    /**
//     * @param mixed $urunKdvOrani
//     */
//    public function setUrunKdvOrani($urunKdvOrani)
//    {
//        $this->urunKdvOrani = $urunKdvOrani;
//    }
//
//}
//
//$urun = new Urun();
////$urun->setUrunAdi("Ayakkabi");
//$urun->setUrunFiyati(200);
//$urun->setUrunKdvOrani(40);


//Cookie örnek
//
//setcookie("KullaniciAdi","",0);
//setcookie("Sifre","",0);
//
//echo "Kullanıcı Adi " . $_COOKIE["KullaniciAdi"];
//echo "Sifre " . $_COOKIE["Sifre"];

//Trait

trait Kisi{
    public function isimGetir(){
        return "Ramazan";
    }
}

class Deneme{

    use Kisi;
}

$dene = new Deneme();
$dene->isimGetir();
?>

</body>
</html>