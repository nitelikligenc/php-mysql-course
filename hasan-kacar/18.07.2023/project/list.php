<?php
require_once 'connection.php';


$sql = "SELECT * FROM a_user";
$query = $pdo->prepare($sql);
$query->execute();

$allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD - PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h3>USER LIST</h3>
        </div>
        <div class="col-md-4 text-end">
            <a href="form.php" class="btn btn-success">+</a>
        </div>
    </div>
    <hr>
    <table class="table">
        <?php
        if (count($allUsers) > 0){
        ?>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Gender</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($allUsers as $user){
           ?>
                <tr>
                    <td><?php echo $user["id"]; ?></td>
                    <td><?php echo $user["name"]; ?></td>
                    <td><?php echo $user["surname"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo $user["gender"] == "erkek" ? "Erkek" : "Kadın"; ?></td>
                    <td>
                        <a href="form.php?id=<?php echo $user["id"]; ?>" class="btn btn-primary btn-sm">Güncelle</a>
                        <a href="delete.php?id=<?php echo $user["id"]; ?>" class="btn btn-danger btn-sm">Sil</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        <?php
        }else{
        ?>
        <div class='alert alert-danger text-danger text-center'>Kullanıcı Bulunamadı</div>
        <?php
        }
        ?>
    </table>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
