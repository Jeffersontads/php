<?php 
/**
 * Escopo de variavel significa ate onde esta variavel sera enchergada.
 * quando criamos uma variavel ela so eh vista dentro do arquivo que voce criou ou dentro de uma funcao que voce criou.
 */

 $nome = "jefferson";

//  function teste1(){
//     global $nome; 
//     echo $nome;
//     echo $nome. " Agora no teste 1";

//  }

 function teste2(){
    global $nome; 
    echo $nome. " Agora no teste 2";
}

 //chamando a funcao

 teste2();
?>