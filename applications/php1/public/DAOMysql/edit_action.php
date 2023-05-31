<?php

require './config.php';
require './DAO/UserDAOmysql.php';

$user = new UserDAOMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
  try {
    $userUpdate = new User();
    $userUpdate->setId($id);
    $userUpdate->setName($name);
    $userUpdate->setEmail($email);

    // Atualiza o usuário e verifica se a atualização foi bem-sucedida
    if ($user->update($userUpdate)) {
      header("Location: index.php");
      exit;
    } else {
      // Lida com o caso de falha na atualização
      echo "Falha na atualização do usuário. Por favor, tente novamente.";
    }
  } catch (Exception $e) {
    // Lida com exceções lançadas durante a atualização
    echo "Ocorreu um erro durante a atualização do usuário: " . $e->getMessage();
  }
} else {
  header("Location: edit.php?id=" . $id);
  exit;
}
