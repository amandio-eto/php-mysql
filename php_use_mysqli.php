<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "php_mysql_db";
try{
    $con = new mysqli($server,$username,$password,$db);
    echo "Connection Successfully ";
}
catch(Exception $e){
    echo "failed :".$e->getMessage().PHP_EOL;    
}