<?php

class Post {
  private $likes;
  private $id;

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setLikes($like)
  {
    $this->likes = $like;
  }

  public function getLikes()
  {
    return $this->likes;
  }

}

class Foto extends Post
{
  private $url;
  public function __construct($id)
  {
    $this->setId($id);
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }

}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl(30);

echo "Foto #" . $foto->getId() . " - " . $foto->getLikes() . " Likes";
