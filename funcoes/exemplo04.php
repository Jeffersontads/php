<?php 
/**
 * Podemos criar uma função que recebe vários parâmetros ou não e existe uma função 
 * interna do php que pode ser usada para isso.
 */
function ola() { 
//essa funcao retona todos os args passados como parametros para esta funcao
  $arg = func_get_args();
  return $arg;
}
  var_dump(ola("Buenas!", 10));

?>