<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "php_mysql_db";
$port = 3306;

try {
    $con = new PDO("mysql:host=$server;port=$port;dbname=$db",$username,$password);
    echo "Connection Seccesfully".PHP_EOL;
}
catch(Exception $e){
    echo "Error: " . $e->getMessage().PHP_EOL;
    
}