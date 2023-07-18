<?php
require_once "connection.php";
$userId = @$_GET["id"];
$postUrl = "insert.php";
if(isset($userId)){
    $sql = "SELECT * FROM a_user WHERE id = $userId";
    $query = $pdo->query($sql);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_OBJ);
    $postUrl = "update.php";
}
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
            <h3>USER ADD FORM</h3>
        </div>
        <div class="col-md-4 text-end">
            <a href="list.php" class="btn btn-info">Users</a>
        </div>
    </div>
    <hr>
    <form action="<?php echo $postUrl; ?>" method="post">
        <?php
        if(isset($user)){
        ?>
            <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
        <?php
        }
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="user_name" class="form-label">Name</label>
                    <?php
                    if (isset($user)){
                    ?>
                        <input name="name" type="text" class="form-control" id="user_name" value="<?php echo $user->name; ?>">
                    <?php
                    }else{
                    ?>
                        <input name="name" type="text" class="form-control" id="user_name">
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="user_surname" class="form-label">Surname</label>
                    <?php
                    if (isset($user)){
                        ?>
                        <input name="surname" type="text" class="form-control" id="user_name" value="<?php echo $user->surname; ?>">
                        <?php
                    }else{
                        ?>
                        <input name="surname" type="text" class="form-control" id="user_surname">
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="user_mail" class="form-label">Email address</label>
            <?php
            if (isset($user)){
                ?>
                <input name="email" type="email" class="form-control" id="user_mail" value="<?php echo $user->email; ?>">
                <?php
            }else{
                ?>
                <input name="email" type="email" class="form-control" id="user_mail">
                <?php
            }
            ?>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <div>
                <?php
                if (isset($user)){
                    if($user->gender == "erkek"){
                    ?>
                        <input type="radio" name="gender" value="erkek" checked> Erkek
                        <input type="radio" name="gender" value="kadin"> Kadın
                    <?php
                    }else{
                    ?>
                        <input type="radio" name="gender" value="erkek"> Erkek
                        <input type="radio" name="gender" value="kadin" checked> Kadın
                    <?php
                    }
                }else{
                ?>
                    <input type="radio" name="gender" value="erkek"> Erkek
                    <input type="radio" name="gender" value="kadin"> Kadın
                <?php
                }

                ?>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
