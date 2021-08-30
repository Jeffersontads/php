<?php 
/**
 * PARA EXIBIR UMA CONSTANTE NAO PRECISA USAR O $
 * NOTE QUE NAO PODEMOS USAR ESPACOS NO NOME DA CONSTANTE.
 */

 define("SERVIDOR", "127.0.0.1");

 define("BANCO_DE_DADOS", [
   "127.0.0.1",
   "root",
   "pass",
   "teste"
 ]);

//  echo SERVIDOR;
print_r(BANCO_DE_DADOS);

echo PHP_VERSION;
echo "<br>";
echo DIRECTORY_SEPARATOR;
?>