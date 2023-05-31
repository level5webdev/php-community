<?php

require './config.php';
require './DAO/UserDAOmysql.php';

$user = new UserDAOMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

  if($user->findByEmail($email) === false) {
    $newUser = new User();
    $newUser->setName($name);
    $newUser->setEmail($email);

    $user->create($newUser);

    header("Location: index.php");
    exit;

    
  } else {

    header("Location: add.php");
    exit;
  }
  
} else {
  header("Location: add.php");
  exit;
}
