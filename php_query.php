<?php
require_once __DIR__ . '/Connection.php';
$sqlcon = getconnection();
$sql = "SELECT * FROM users";
$result = $sqlcon->query($sql);


foreach ($result as $get){
    $name = $get['name'];
    $email = $get['email'];

    echo "Name : $name" . PHP_EOL;
    echo "Email : $email". PHP_EOL;
}

$sqlcon = null;