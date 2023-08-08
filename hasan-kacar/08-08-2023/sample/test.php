<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$sonuc = curl_exec($ch);

curl_close($ch);

$pattern = '/src="(.*?)/"';
preg_match_all('/src="(.*?)" /', $sonuc, $images);//Resim İceriklerini Yakalamak icin Düzenli İfade Yazdık......

//echo "<pre>";
//print_r($images);
//echo "</pre>";

foreach ($images[1] as $image)
{
    $imageName = basename($image);
    $pathName = __DIR__ . "/images/" . $imageName;
    $imageContent = file_get_contents($image);
    file_put_contents($pathName, $imageContent);
}

echo "Veriler Çalındı!";
