<?php
class Basico1
{
  public function somar($x, $y)
  {
    return $x + $y;
  }
}

class Basico2
{
  public function somar($x, $y)
  {
    $res = $x;
    for ($i = 0; $i < $y; $i++) {
      $res++;
    }

    return $res;
  }
}

class Matematica
{
  private $basico;

  public function __construct($class)
  {
    $this->basico = $class;
  }

  public function somar($x, $y)
  {
    return $this->basico->somar($x, $y);
  }
}

$basico = new Basico1();
$basico2 = new Basico2();
$mat = new Matematica($basico);
echo $mat->somar(20, 12);
