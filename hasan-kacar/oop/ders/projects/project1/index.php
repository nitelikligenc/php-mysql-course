<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP OOP Project - 1</title>
</head>
<body>
    <h2 class="text-center mt-4">PHP OOP Project - 1</h2>
    <hr>
    <div class="container">
        <div class="col-md-6" style="margin-left: auto; margin-right: auto">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="sayi1" class="form-label">Sayı 1</label>
                    <input name="sayi_1" type="text" class="form-control" id="sayi1" aria-describedby="sayi1">
                </div>

                <div class="mb-3">
                    <label for="sayi2" class="form-label">Sayı 2</label>
                    <input name="sayi_2" type="text" class="form-control" id="sayi2">
                </div>

                <select name="islem" class="form-select" aria-label="Default select example">
                    <option selected>İşlem Seç</option>
                    <option value="toplama">Toplama</option>
                    <option value="cikarma">Çıkarma</option>
                    <option value="carpma">Çarpma</option>
                    <option value="bolme">Bölme</option>
                </select>

                <button type="submit" class="btn btn-primary mt-3">İşlem Yap</button>
            </form>
        </div>



<?php

class DortIslem{
    private $a;
    private $b;
    private $islem;

    public function __construct($a, $b, $islem)
    {
        $this->a = $a;
        $this->b = $b;
        $this->islem = $islem;
    }

    public function islemYap()
    {
        if($this->islem == "toplama"){
            return $this->a + $this->b;
        }elseif ($this->islem == "cikarma"){
            return $this->a - $this->b;
        }elseif ($this->islem == "carpma"){
            return $this->a * $this->b;
        }elseif ($this->islem == "bolme"){
            return $this->a / $this->b;
        }else{
            return "İşlem Bulunamadı!!!";
        }
    }
}

$sayi1 = @$_POST["sayi_1"];
$sayi2 = @$_POST["sayi_2"];
$islem = @$_POST["islem"];

if($_POST["sayi_1"] || $_POST["sayi_2"] || $_POST["islem"]){
    $dortIslem = new DortIslem($sayi1, $sayi2, $islem);
    $result = $dortIslem->islemYap();

    echo "<div class='alert alert-success mt-4 col-md-6 text-center' style='margin-left: auto; margin-right: auto'>İşlem Sonucu : $result</div>";
}






?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
