<?php
const EMAIL = "test@gmail.com";
const PASSWORD = "12345";

$email = @$_POST["email_value"];
$password = @$_POST["password_value"];
$selectVal = @$_POST["select_value"];

if($selectVal == "0-15"){
    echo "Yaş Grubu 0-15";
}elseif ($selectVal == "15-30"){
    echo "Yaş Grubu 15-30";
}elseif($selectVal == "30-45"){
    echo "Yaş Grubu 30-45";
}else{
    echo "Yaş Grubu belirsiz";
}

die();
function loginControl($mail, $pass)
{
    $state = false;
    if($mail == EMAIL && $pass == PASSWORD){
        $state = true;
    }

    return $state;
}

$loginResult = loginControl($email, $password);

if($loginResult){
    echo "<b>E-Mail : </b>" . $email . "<br>";
    echo "<b>Password : </b>" . $password . "<br>";
}else{
    echo "Girmiş olduğunuz verilere ait kullanıcı bulunamadı!";
}