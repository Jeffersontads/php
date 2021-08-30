<?php 
/**
 * Veja que foi usado a retisencias ... antes da variavel $valores que foi passada como referencial e tambem dizemos que é INT
 * assim todos os parametros que vao vir serao inteiros claro que este exemplo so vai funcionar se os valores forem INT.
 * ESTE RECURSO CHAMA-SE DECLARACAO DE PARAMETROS ESCALARES
 * */
function soma(int ...$valores):string { //:string declaramos que o tipo de retorna sera string (conversao do tipo de dado no retorno.)
  return array_sum($valores);
}

echo soma(2, 2);
echo"<br>";
echo soma(25, 33);
echo"<br>";
echo soma(1.5, 3.2);
echo"<br>";

?>