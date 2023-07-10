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

<form action="sonuc.php" method="post">

    Adınız = <input type="text" name="adi">
    Soyadınız = <input type="text" name="soyadi">
    Yaşınız =
    <select name="yas">
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>

    </select>
    Hobileriniz <br>
    Spor : <input type="checkbox" name="hobi[]" value="Spor"> <br>
    Kitap okumak : <input type="checkbox" name="hobi[]" value="Kitap Okumak"><br>
    Yüzmek : <input type="checkbox" name="hobi[]" value="Yuzmek"><br>
    Dans Etmek : <input type="checkbox" name="hobi[]" value="Dans Etmek"><br>

    <button type="submit">Ekle</button>
</form>


</body>
</html>