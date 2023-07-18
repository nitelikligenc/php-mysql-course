<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>