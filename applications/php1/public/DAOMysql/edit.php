<?php
require './config.php';
require './DAO/UserDAOmysql.php';

$user = new UserDAOMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

$isUser = false;
if ($id) {
  $isUser = $user->findById($id);

} 

if($isUser === false) {
  header("Location: index.php");
  exit;
}
?>

<h1>Editar Usuário</h1>


<form method="POST" action="edit_action.php">

  <input type="hidden" name="id" value="<?= $isUser->getId(); ?>" />
  <label for="name">
    Name:<br />
    <input type="text" name="name" value="<?= $isUser->getName(); ?>" />
  </label>
  <br />
  <br />
  <label for="name">
    E-mail:<br />
    <input type="text" name="email" value=<?= $isUser->getEmail();?> />
  </label>

  <br />
  <br />


  <input type="submit" value="Atualizar Novo Usúario" />
</form>