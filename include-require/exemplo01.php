<?php 

/**
 * require e include sao duas funcoes do php para incluir arquivos 
 * REQUIRE: Obriga que o arquivo existe e que esteja funcionando corretamente, senaum vai gerar um erro fatal, parando a aplicacao.
 * INCLUDE: tenta funcionar mesmo que o arquivo nao existe, ele tem mais recursos que o require exemplo include
 * path é um diretorio onde podemos trazer arquivos de la com o include. esse diretorio é configurado no php qndo instalado.
 * 
 * INCLUDE DEVE SER USADOS EM PROJETOS INTERNOS COMO INTRANET, JUSTAMENTE 
 * POR PODER CHAMAR ARQUIVOS DA PASTA INCLUDE PATH DO PHP.
 * INCLUDE PODE TRAZER ARQUIVOS DE UM OUTRO SITE. include remote.
 */

 /**
  * PARA EVITAR QUE O ARQUIVO TRAGA MAIS DE UMA VEZ O MESMO ARQUIVO 
EXISTE O REQUIRE ONCE OU INCLUDE ONDE.
  */

 function somar( $a, $b) {
     
    return $a+$b;
 }
?>
