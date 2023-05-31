<?php

require './config.php';
require './DAO/UserDAOmysql.php';

$user = new UserDAOMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if ($id) {
  $user->delete($id);
}
header("Location: index.php");
exit;
