<?php

require_once __DIR__ . '/Connection.php';
$sqlcon = getconnection();
$sql= 

"CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";
$sqlcon->query($sql);


  