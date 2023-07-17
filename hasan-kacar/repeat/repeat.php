<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repeat</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .yemek-menusu-baslik{
            font-size: 1.6rem;
            font-weight: 600;
            border-bottom: 1px dashed #5e5b5b;
            padding: 7px;
            /* width: 500px; */
            color: #5e5b5b;
        }

        .yemek-menusu-icerikler{
            list-style: none;
            padding: 0;
        }

        .yemek-menusu-icerikler > li{
            padding: 5px;
            color: #898989;
        }

        .yemek-menusu-ana-div{
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<?php

$yemekMenusu = [
    "corbalar"  => [
        "Mercimek",
        "Ezogelin",
        "İşkembe"
    ],
    "araSicaklar" => [
        "Sarma",
        "Sigara Böreği",
        "Su Böreği"
    ],
    "anaYemekler" => [
        "Pirzola",
        "Pide",
        "İskender",
        "Kebap"
    ],
    "tatlilar" => [
        "Sütlaç",
        "Baklava",
        "Kadayıf"
    ]
];
?>

<div class="yemek-menusu-ana-div">
    <h1>Menu</h1>
    <hr>
    <div class="corbalar-div">
        <span class="yemek-menusu-baslik">Çorbalar</span>
        <ul class="yemek-menusu-icerikler">
            <?php
            foreach ($yemekMenusu["corbalar"] as $corba)
            {
                echo "<li>$corba</li>";
            }
            ?>
        </ul>
    </div>

    <div class="ara-sicaklar-div">
        <span class="yemek-menusu-baslik">Ara Sıcaklar</span>
        <ul class="yemek-menusu-icerikler">
            <?php
            foreach ($yemekMenusu["araSicaklar"] as $araSicak)
            {
                echo "<li>$araSicak</li>";
            }
            ?>
        </ul>
    </div>

    <div class="ara-sicaklar-div">
        <span class="yemek-menusu-baslik">Ana Yemekler</span>
        <ul class="yemek-menusu-icerikler">
            <?php
            foreach ($yemekMenusu["anaYemekler"] as $anaYemek)
            {
                echo "<li>$anaYemek</li>";
            }
            ?>
        </ul>
    </div>

    <div class="ara-sicaklar-div">
        <span class="yemek-menusu-baslik">Tatlılar</span>
        <ul class="yemek-menusu-icerikler">
            <?php
            foreach ($yemekMenusu["tatlilar"] as $tatli)
            {
                echo "<li>$tatli</li>";
            }
            ?>
        </ul>
    </div>
</div>

</body>
</html>