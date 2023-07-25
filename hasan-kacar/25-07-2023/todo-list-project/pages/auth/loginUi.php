<?php
session_start();
ob_start();

$user = @$_SESSION['user'];

if($user){
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/todo/list.php");
    exit();
}else{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <?php require_once '../../services/ui/links.php' ?>
    </head>
    <body>

    <div class="container mt-2">
        <div class="col-md-6 ms-auto me-auto mt-5">
            <h2>Login</h2>
            <hr>
            <form action="authenticator/login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="mt-5 text-center">
                <a href="registerUi.php">Register</a>
            </div>
        </div>
    </div>

    <?php require_once '../../services/ui/scripts.php' ?>
    </body>
    </html>

<?php
}


?>
