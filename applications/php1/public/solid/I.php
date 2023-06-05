<?php
// I - Interface Segregation Principle (pricípio da Segregação da Interface)


interface Aves {
  public function setLocation($lat, $lng);
  public function reder();
}

interface  AvesQueVoa extends Aves {

  public function setAltitute($alt);
}

class Papagaio implements AvesQueVoa
{
  public function setLocation($lat, $lng){}
  public function setAltitute($alt){}
  public function reder(){}
}

class Pinguim implements Aves
{
  public function setLocation($lat, $lng)
  {
  }
  public function setAltitute($alt)
  {
  }
  public function reder()
  {
  }
}