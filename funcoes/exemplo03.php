<?php 
//esta funcao retona uma string

/**Parametros que nao tem um valor padrão colocar sempre a esquerda */
function ola($texto, $periodo = "Bom dia!"){
  //codex
  return "Olá $periodo $texto<br>";
}
// imprime o valor da minha funcao e estamos passando como parametros um nome
echo ola("mundo!");
echo ola("jefferson!");
?>