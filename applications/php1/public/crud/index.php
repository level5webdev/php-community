<?php require 'config.php';

$list = [];

$sql = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");


if ($sql->rowCount() > 0) {
  $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}



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
      <th><?= $user['id'] ?></th>
      <th><?= $user['name'] ?></th>
      <th><?= $user['email'] ?></th>
      <th>
        <a href="edit.php?id=<?= $user['id'] ?>">Editar</a>
        <a href="delete.php?id=<?= $user['id'] ?>"">Excluir</a>
      </th>
    </tr>
  <?php endforeach; ?>
</table>