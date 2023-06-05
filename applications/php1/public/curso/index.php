<?php
// unlink('list.txt'); // excluir
// rename('list.txt', 'pasta/caca.txt'); // move e renomear ('list.txt', 'caca.txt')
// copy('list.txt', 'caca.txt'); // copyaar

// Cria numero
// $array = range(0, 22, 2);

// foreach ($array as $key) {
//   echo $key . "<br/>";
// }
// 

$array = [
  'name' => 'Luiz',
  'age' => 90,
  'empresa' => 'level5web',
  'cor' => 'Azul',
  'profissao' => 'Progrmadore das Ganbiaras',
  'cida' => 'Progrmadore das Gadadasdasnbiaras',
];

?>


<table>
  <thead>
    <tr>
      <?php foreach ($array as $key => $value) {
        echo '<th> <strong>' . $key . '</strong></th>';
      } ?>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($array as $key => $value) {
      echo ' <td>' . $value . '</td>';
    } ?>

  </tbody>
  <table>
    <!-- 
// if(key_exists('idade', $array)) {
// $idade = $array['$idade'];

// echo $idade . " anos ";
// } else {
//   echo "Não tem não em";
// }

// $keys_array = array_keys($array);
// $values_array = array_values($array);


// print_r($keys_array) ;
// echo "<br />";
// print_r($values_array ) ;

// ?>
// <form method="POST" action="recebe.php" enctype="multipart/form-data">
//   <input type="file" name="arquivo" />
//   <input type="submit" value="Enviar" />
// </form> -->