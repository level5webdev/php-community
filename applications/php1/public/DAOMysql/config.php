<?php

$host = 'http://127.0.0.1';
$dbname = 'projectDB';
$username = 'root';
$password = '1234';


try {
  $pdo = new PDO("mysql:host=172.19.0.3;port=3306;dbname=projectDB", $username, $password);
} catch (PDOException $pe) {
  die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}

