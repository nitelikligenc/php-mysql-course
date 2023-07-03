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

<?php

interface CRUD{
    public function create($tableName,$id);
    public function read($tableName,$id);
    public function update($tableName,$id);
    public function delete($tableName,$id);
}

abstract class tema{
    abstract public function HeaderSide($arkaPlanRengi,$headerBanneri);
}

class topSite extends tema implements CRUD{


    public function create($tableName, $id)
    {
        // TODO: Implement create() method.
    }

    public function read($tableName, $id)
    {
        // TODO: Implement read() method.
    }

    public function update($tableName, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($tableName, $id)
    {
        // TODO: Implement delete() method.
    }

    public function HeaderSide($arkaPlanRengi, $headerBanneri)
    {
        // TODO: Implement HeaderSide() method.
    }
}

?>

</body>
</html>