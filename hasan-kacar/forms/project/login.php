<?php

const EMAIL = "test@gmail.com";
const PASSWORD = "12345678";

$email = $_GET["email_value"];
$password = $_GET["password_value"];

if($email == EMAIL and $password == PASSWORD){
    echo "İşlem Başarılı.";
}else{
    echo "İşlem Başarısız.";
}