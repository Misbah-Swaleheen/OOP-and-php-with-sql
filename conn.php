<?php 

$server = "mysql:host=localhost;dbname=online shopping center";
$user = 'root';
$password = '';

//database say connect karaney kay liye
$pdo = new PDO($server, $user, $password);

//pdo settngs for exposing errors
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>