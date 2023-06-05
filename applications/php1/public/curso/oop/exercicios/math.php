<?php 
class Calculadora {
  private int $soma = 0;

  public function add($value = 0)
  {
    $this->soma += $value;
  }

  public function sub($value = 0)
  {
    $this->soma -= $value;
  }

  public function mutiplay($value = 0)
  {
    $this->soma *= $value;
  }

  public function dividi($value = 0)
  {
    $this->soma = $this->soma/$value;
  }

  public function clear()
  {
    $this->soma = 0;
  }

  public function total()
  {
    return $this->soma;
  }

}
  

