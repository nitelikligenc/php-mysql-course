<?php
const USERNAME = "hkacar";
define("PASSWORD", sha1(md5("12345")));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repeat - 2</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .container{
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }

        .login-form-baslik{
            text-align: center;
        }

        .form-input-baslik{
            font-size: 1.3rem;
            font-weight: 500;
            padding: 0;
            margin: 0;
        }

        .form-input{
            width: 95%;
            height: 32px;
            border-radius: 5px;
            border: 1px solid;
            margin-top: 0.8rem;
            outline: #E9E9E9;
            padding: 5px 10px;
        }

        .mt-2-rem{
            margin-top: 2rem;
        }

        .form-submit{
            width: 100%;
            height: 40px;
            font-size: 1.1rem;
            font-weight: 500;
            color: white;
            background-color: #4fc74f;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="login-form-baslik">Login Form</h2>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="submit_control" value="1">
            <div>
                <p class="form-input-baslik">Kullanıcı Adı</p>
                <input type="text" name="username" class="form-input">
            </div>

            <div class="mt-2-rem">
                <p class="form-input-baslik">Password</p>
                <input type="password" name="password" class="form-input">
            </div>

            <div class="mt-2-rem">
                <button class="form-submit">Giriş Yap</button>
            </div>
        </form>


        <?php
        $userName = $_POST["username"];
        $password = $_POST["password"];
        $submitControl = $_POST["submit_control"];

        if($submitControl){
            $sifrelenmisPassword = sha1(md5($password));
            if(($userName == USERNAME) and ($sifrelenmisPassword == PASSWORD)){
                echo "İşlem Başarılı";
            }else{
                echo "İşlem Başarısız";
            }
        }else{
            echo "";
        }
        ?>
    </div>
</body>
</html>
