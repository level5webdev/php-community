<?php
echo "<pre>";

print_r($_FILES);

// $nome = $_FILES['arquivo']['name'];

// echo $nome;

// move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'. $nome);

$file_premission = ['image/jpg', 'image/jpeg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $file_premission)) {
$file_tmp = $_FILES['arquivo']['tmp_name'];
// $file_name = $_FILES['arquivo']['name'];
$file_name = md5(time() . rand(0, 1000)) . '.jpg';
$file_destination = 'arquivos/' . $file_name;
echo $file_destination;

  echo "Ta salvo amigo!";

move_uploaded_file($file_tmp, $file_destination); 
} else {
  echo "Deu ruim aqui";
}
