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

//Kullanıcınin girdiği sayıya kadar olan sayıları yazdıran php kodunu yazınız.
<div class="container">
    <form action="submit.php" method="POST">
        <div class="mb-3">
            <label for="sayi1" class="form-label">Sayı 1</label>
            <input type="text" name="sayi1" class="form-control" id="sayi1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="sayi2" class="form-label">Sayı 2</label>
            <input type="text" name="sayi2" class="form-control" id="sayi2">
        </div>

        <button type="submit" class="btn btn-primary">Hesapla</button>
    </form>
</div>

</body>
</html>