<?php 
/**EXEMPLO MUITO USADO QNDO ESTAMOS TRATANDO UM ARRAY COM FOREACH. 
 * 
*/
  
$pessoa = array(
  'nome'=>'Rodrigo',
  'ídade'=>38
);
//ao colocar o & estamos dizendo que estamos passando os valores deste array por referencia ASSIM 
//podemos alterar o valor da variavel que esta definido dentro do array.
foreach ($pessoa as &$value) {
  if(gettype($value) === 'integer') { 
    $value +=10;  
    echo $value.'<br>';
  }
}

print_r($pessoa);

?>