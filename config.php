<?php

$db_name = 'user';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
    
  $pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);


} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>


