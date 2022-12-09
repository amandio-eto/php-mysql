<?php
require_once __DIR__ . '/Connection.php';

$sqlcon = getconnection();

$sql = <<<SQL
INSERT INTO users(name,email,password)
VALUES("ETO",'info@eto.tl','53guR03t0#@!');
SQL;
$sqlcon->exec($sql);


$sqlcon=null;