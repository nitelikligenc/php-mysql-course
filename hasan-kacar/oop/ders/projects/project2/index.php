<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>OOP Form Project - 2</title>
</head>
<body>
<h2 class="text-center mt-4">PHP OOP Project - 1</h2>
<hr>
<div class="container">
    <div class="card col-md-6"  style="margin-left: auto; margin-right: auto">
        <div class="card-header">
            Kullanıcı Formu
        </div>

        <div class="card-body">
            <div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="userName" class="form-label">Kullanıcı Adı</label>
                        <input name="user_name" type="text" class="form-control" id="userName" aria-describedby="userName">
                    </div>

                    <div class="mb-3">
                        <label for="userSurname" class="form-label">Kullanıcı Soyadı</label>
                        <input name="user_surname" type="text" class="form-control" id="userSurname">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">İşlem Yap</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    class UserInfo{
        private $ad;
        private $soyad;

        public function getAd(){
            return $this->ad;
        }

        public function getSoyad()
        {
            return $this->soyad;
        }

        public function setAd($ad){
            $this->ad = $ad;
        }

        public function setSoyad($soyad){
            $this->soyad = $soyad;
        }

        public function bilgileriGoster()
        {
            echo '<div class="card mt-4 col-md-6" style="margin-left: auto; margin-right: auto"><div class="card-body"><h5 class="card-title">Kullanıcı Bilgileri</h5>
    <p class="card-text">Ad : ' . $this->ad . '</p><p class="card-text">Soyad : ' . $this->soyad . '</p></div></div>';
        }
    }

    $ad = @$_POST["user_name"];
    $soyad = @$_POST["user_surname"];

    if($ad ||$soyad){
        $userInfos = new UserInfo();

        $userInfos->setAd($ad);
        $userInfos->setSoyad($soyad);

        $kullaniciAdi = $userInfos->getAd();
        $kullaniciSoyadi = $userInfos->getSoyad();

    ?>
    <div class="card col-md-6 mt-4" style="margin-left: auto; margin-right: auto">
        <div class="card-body">
            <h5 class="card-header"><?php echo $kullaniciAdi; ?> Bilgileri</h5>
            <div class="card-body">
                <p class="card-text">Adı : <?php echo $kullaniciAdi; ?></p>
                <p class="card-text">Soyadi : <?php echo $kullaniciSoyadi; ?></p>
            </div>
        </div>
    </div>
    <?php

//        $userInfos->bilgileriGoster();
    }

    ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>