<?php
$senha = '1234';
// $hash = password_hash($senha, PASSWORD_DEFAULT);
$hash = password_hash($senha, PASSWORD_BCRYPT);

echo "Senha limpa". $senha."</br>";
echo "Senha criptografada".$hash;