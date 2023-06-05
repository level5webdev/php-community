<?php
$array = ['a', 'b', 'c', 'd'];
$pessoas = [
  ['namo' => '', 'idade' => '', 'nota' => '10'],
  ['namo' => '', 'idade' => '', 'nota' => '10'],
  ['namo' => '', 'idade' => '', 'nota' => '10'],
];

function listaPessoa($acumulativo, $atual) {

  if($atual['nota'] >= 6.5){
    $acumulativo += $atual['nota'];
  }
  return $acumulativo;
}


$array_slice_retorno = array_slice($array, 0, 2); // array, inicial, quantidade
$array_splice_retorno = array_splice($array, 0, 2, "eu estou"); // array, inicial, remove quantidade, adiciona
$array_reduce_retorno = array_reduce($pessoas, 'listaPessoa'); // array, inicial, remove quantidade, adiciona

print_r($array_slice_retorno);
print_r($array_splice_retorno);
?>