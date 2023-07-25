<?php
require_once '../../base.php';

session_start();
ob_start();

$user = @$_SESSION["user"]; // Return User ID
if($user){

$todoListSql = "SELECT * FROM todo INNER JOIN user ON todo.user_id = user.id WHERE user.id = $user";
$todoListQuery = $connection->query($todoListSql);
$todoList = $todoListQuery->fetch_all(PDO::FETCH_ASSOC);
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

        <form action="todoAdd.php" method="post">
            <div class="d-flex">
                <input type="text" name="todo_content" class="form-control">
                <button type="submit" class="btn btn-success ms-4">Ekle</button>
            </div>
        </form>


        <h2 class="mt-5">TODO List</h2>
        <hr>
        <div id="todo_list_content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>TODO Content</th>
                        <th class="text-end">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(count($todoList) > 0){
                    foreach ($todoList as $todo){
                        ?>
                        <tr>
                            <td><?php echo $todo[2]; ?></td>
                            <td class="text-end">
                                <button class="btn btn-primary btn-sm">Başla</button>
                                <button class="btn btn-success btn-sm">Tamamla</button>
                            </td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td colspan="2">Listede herhangi bir işlem bulunamadı</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once '../../services/ui/scripts.php' ?>
</body>
</html>

<?php
}else{
    Header("Location: http://localhost:8888/php-mysql-course/hasan-kacar/25-07-2023/todo-list-project/pages/auth/loginUi.php");
    exit();
}
?>
