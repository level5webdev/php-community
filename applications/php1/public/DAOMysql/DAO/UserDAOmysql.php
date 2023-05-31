<?php
require_once './Models/User.php';

class UserDAOMysql implements UserDAO
{
  private $pdo;

  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }

  public function create(User $user)
  {
    // Implemente a lógica para criar um usuário no banco de dados
    $sql = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $sql->bindValue(':name', $user->getName());
    $sql->bindValue(':email', $user->getEmail());
    $sql->execute();

    $user->setId($this->pdo->lastInsertId());

    return $user;
  }

  public function findAll()
  {
    $usersAll = [];
    $request = $this->pdo->query("SELECT * FROM users");

    if ($request->rowCount() > 0) {
      $result = $request->fetchAll();

      foreach ($result as $user) {
        $userModel = new User();
        $userModel->setId($user['id']);
        $userModel->setName($user['name']);
        $userModel->setEmail($user['email']);

        $usersAll[] = $userModel;
      }
    }

    return $usersAll;
  }

  public function findByEmail($email)
  {
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $request = $sql->fetch();
      $newUser = new User;
      $newUser->setId($request['id']);
      $newUser->setName($request['name']);
      $newUser->setEmail($request['email']);

      return $newUser;

    } else {

      return false;
    }
  }
  public function findById($id)
  {
    // Implemente a lógica para encontrar um usuário por ID no banco de dados
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $request = $sql->fetch();
      $newUser = new User;
      $newUser->setId($request['id']);
      $newUser->setName($request['name']);
      $newUser->setEmail($request['email']);

      return $newUser;
    } else {

      return false;
    }
  }

  public function update(User $user)
  {
    // Implemente a lógica para atualizar um usuário no banco de dados
    $sql = $this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $user->getName());
    $sql->bindValue(':email', $user->getEmail());
    $sql->bindValue(':id', $user->getId());
    $sql->execute();

    return $user;
  }

  public function delete($id)
  {
    // Implemente a lógica para excluir um usuário do banco de dados
    $sql = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }
}
