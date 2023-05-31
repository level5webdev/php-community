<?php 
require './config.php';
require './DAO/UserDAOmysql.php';

$user = new UserDAOMysql($pdo);
$list = $user->findAll();

?>
<a href="add.php">ADICIONAR USúARIO</a>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>

  </tr>

  <?php foreach ($list as $user) : ?>
    <tr>
      <th><?= $user->getId() ?></th>
      <th><?= $user->getName() ?></th>
      <th><?= $user->getEmail() ?></th>
      <th>
        <a href="edit.php?id=<?= $user->getId() ?>">Editar</a>
        <a href="delete.php?id=<?= $user->getId() ?>"">Excluir</a>
      </th>
    </tr>
  <?php endforeach; ?>
</table>