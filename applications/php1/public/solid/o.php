<?php 
// O - Open-closed Principle (Princípio Aberto-Fechado)
interface Remuneravel {
  public function renumeracao();
}

class ContratoCLT implements Remuneravel {
  public function renumeracao(){
    
  }
}

class FolhaDePagamento {
  public function calcular(Remuneravel $funcionario)
  {
    return $funcionario->renumeracao();
  }
}