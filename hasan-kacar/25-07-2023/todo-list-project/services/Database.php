<?php

namespace services;

class Database
{
    public $hostName = 'localhost';
    public $username = 'root';
    public $password = 'root';
    public $dbName = 'todo_list';

    public function connection()
    {
        $db = mysqli_connect($this->hostName, $this->username, $this->password, $this->dbName);

        if(!$db){
            echo "Database connection is failed";
            die();
        }

        return $db;
    }
}
