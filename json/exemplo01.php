<?php 

$pessoas = array();

array_push($pessoas, array(
'nome' => 'Jose',
'idade' => 20,
));

array_push($pessoas, array(
  'nome' => 'Rodrigo',
  'idade' => 38,
  ));

echo json_encode($pessoas);
?>