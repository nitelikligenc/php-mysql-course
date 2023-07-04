<?php

echo "<pre>";
print_r($_REQUEST);
print_r($_POST);
echo "</pre>";


echo "<br><br>*************************<br><br>";

echo "Isim Soyisim : " . $_REQUEST["name_surname"] . "<br>";
echo "Isim Soyisim (POST): " . $_POST["name_surname"] . "<br><br>";

echo "E-Mail : " . $_REQUEST["email"] . "<br>";
echo "E-Mail (POST): " . $_POST["email"] . "<br><br>";

echo "Doğum Tarihi : " . $_REQUEST["date"] . "<br>";
echo "Doğum Tarihi (POST): " . $_POST["date"] . "<br><br>";

echo "Cinsiyet : " . $_REQUEST["gender"] . "<br>";
echo "Cinsiyet (POST): " . $_POST["gender"] . "<br><br>";

echo "Sozlesme Onay : " . $_REQUEST["sozlesme"] . "<br>";
echo "Sozlesme Onay (POST): " . $_POST["sozlesme"] . "<br><br>";