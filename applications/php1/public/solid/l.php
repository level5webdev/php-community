<?php
// L - Liskov Subtitution Principe (Princípio da substituição de Liskov)
class A {
  public function getNome() {
    return "MEu nome é A";
  }
}

class B  extends A{
  public function getNome()
  {
    return "MEu nome é B";
  }
}


function imprimaNome(A $obg) {
  return $obg->getNome();
}

$objeto1 = new A();
$objeto2 = new B();

echo imprimaNome($objeto1)."<br/>";
echo imprimaNome($objeto2)."<br/>";
