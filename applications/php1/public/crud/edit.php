<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
  $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();
  if ($sql->rowCount() > 0) {

    $info = $sql->fetch(PDO::FETCH_ASSOC);

  } else {
    header("Location: index.php");
    exit;
  }
} else {
  header("Location: index.php");
  exit;
}
?>

<h1>Editar Usuário</h1>


<form method="POST" action="edit_action.php">

<input type="hidden"name="id"value="<?= $info['id'] ?>" />
  <label for="name">
    Name:<br />
    <input type="text" name="name" value="<?= $info['name'] ?>" />
  </label>
  <br />
  <br />
  <label for="name">
    E-mail:<br />
    <input type="text" name="email" value=<?= $info['email'] ?> />
  </label>

  <br />
  <br />


  <input type="submit" value="Atualizar Novo Usúario" />
</form>