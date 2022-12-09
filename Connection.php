<?php
function getconnection() : PDO
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "php_mysql_db";
    $port = 3306;
    return new PDO("mysql:host=$server;port=$port;dbname=$db",$username,$password);  
}


    