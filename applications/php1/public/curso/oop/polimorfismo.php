<?php
interface Forma
{
  public function getTipo();

  public function getArea();
}

class Quadrado implements Forma
{
  private $largura;
  private $altura;

  public function __construct($l, $a)
  {
    $this->largura = $l;
    $this->altura = $a;
  }
  public function getTipo() {
    return "quadrado";
  }

  public function getArea()
  {
    return $this->largura * $this->altura;
  }

}

class Circulo implements Forma
{
  private $raio;
  public function __construct($r)
  {
    $this->raio= $r;
  }

  public function getTipo(){
    return "Circuit";

  }

  public function getArea() {
    return pi() * ($this->raio * $this->raio);
  }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(8);

$calculoObj = [
  $quadrado,
  $circulo
];

foreach ($calculoObj as $calculo) {
  $tipo = $calculo->getTipo();
  $area = $calculo->getArea();
  echo "" . $tipo . " : " . $area . "<br>";
}
