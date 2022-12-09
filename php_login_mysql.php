<?php
require_once __DIR__ . '/Connection.php';
$sqlcon = getconnection();
#user Login to Simple Application
$email = $sqlcon->quote('amandio.almeida@eto.tl');
$password = $sqlcon->quote('53guR03t0#@!');
$login = "select * from users where email=$email AND password=$password;";
$stament = $sqlcon->query($login);
$success = false;
$find_user = null;
foreach ($stament as $row){
    $success = true;
    $find_user = $row['name'].PHP_EOL; 
}
if($success){
    echo "Successfully ".$find_user.PHP_EOL;
}else{
    echo "Error: Failed to Login".PHP_EOL;  
}