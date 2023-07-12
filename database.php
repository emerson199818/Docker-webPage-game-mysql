<?php
$server = '192.168.1.12'; #ip servidor mysql, puerto (opcional)
$username = 'admin'; #usuario de mysql
$password = '1143'; #password de usuario
$database = 'usuarios'; #nombre base de datos

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
