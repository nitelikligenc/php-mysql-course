<?php

/**
 * Switch : Seçeneklendirme işlemi için kullanılır.
 *      break -> Seçenek gerçekleştikten sonra diğer işlemler gerçekleşmez.
 *      default -> Herhangi bir case değeri karşılanmaz defaulr seçeneği çalışır.
 */

$favoriRengim = "Siyah";

switch ($favoriRengim){
    case "Mavi":
        echo "Favori Rengim Mavi <br>";
        break;

    case "Kirmizi":
        echo "Favori Rengim Kırmızı<br>";
        break;

    case "Sari":
        echo "Favori Rengim Sarı<br>";
        break;

    default:
        echo "Benim herhangi bir favori rengim yok. Her rengi severim<br>";
        break;
}


echo "<br><br>*************************<br><br>";

$sayi1 = 10;
$sayi2 = 5;
$islem = "toplama";

switch($islem){
    case "toplama":
        echo "<b>Toplam :</b>" . ($sayi1 + $sayi2);
        break;

    case "cikarma":
        echo "<b>Fark :</b>" . ($sayi1 - $sayi2);
        break;

    case "bolum":
        echo "<b>Bölüm :</b>" . ($sayi1 / $sayi2);
        break;

    case "carpma":
        echo "<b>Çarpım :</b>" . ($sayi1 * $sayi2);
        break;

    default:
        echo "İşlem Bulunamadı!";
        break;
}


