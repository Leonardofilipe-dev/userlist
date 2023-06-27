<?php

require_once 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){
    
$sql = $pdo->prepare("INSERT INTO login (nome, email) VALUES (:name, :email)");
$sql->bindValue(':name', $name);
$sql->bindParam(':email', $email);
$sql->execute();

header('Location: index.php');

}else{
    header('Location: adicionar.php');
    exit;
}