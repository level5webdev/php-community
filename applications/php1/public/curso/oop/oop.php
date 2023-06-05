<?php
class SimpleClass
{
  // declaração de propriedade
  public  string $var = 'um valor padrão';
  public int $likes;
  public  array $comments = [];
  public string $autor;

  //métodos
  public function __construct($qtda = 0)
  {
    $this->likes = $qtda;
  }
  // declaração de método
  public function displayVar()
  {
    echo $this->var;
  }

  public function aumentarLikes()
  {
    $this->likes++;
    echo $this->likes;
  }

  function getAuthor()
  {
    return $this->autor ?? 'Visitante';
  }
  function setAuthor($autorPost)
  {
    if (strlen($autorPost >= 3)) {
      $this->autor = ucfirst($autorPost);
    }
  }
}

$post = new SimpleClass();

$post->setAuthor('eijao');

echo "Curtidas " . $post->getAuthor();
