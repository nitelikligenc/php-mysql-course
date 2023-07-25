<?php
require_once('services/Database.php');

use services\Database;

$db = new Database();
$connection = $db->connection();

