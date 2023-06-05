<?php
$pdo = new PDO("mysql:dbname=project;host=localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

$dado = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dado);