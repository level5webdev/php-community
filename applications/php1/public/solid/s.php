<?php

// S - Single Responsibility Principe (Princípio da responsabilidade única)
// O - Open-closed Principle (Princípio Aberto-Fechado)
// L - Liskov Subtitution Principe (Princípio da substituição de Liskov)
// I - Interface Segregation Principle (pricípio da Segregação da Interface)
// D - Dependency Inversion Principle (pricípio da inversão da dependência)

class User {
  public function setName(){}
  public function add(){}
}

class User2
{
  public function setName()
  {
  } 
  
}

class UserControler
{
  public function add(User2 $user)
  {
  }
}



