<?php 
/**
 * WHILE significa faça enquanto, muito utilizado para buscar dados no banco de dados
 * tipo enquanto existir registro no banco faça,
 * do-while executa pelo menos 1 vez
 */
$a = true;
 while ($a) {
     $numero = rand(1,10);
     if($numero === 3){
        echo "TRÊS!";
        $a = false;
     }
echo $numero . "";
 }

?>