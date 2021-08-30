<?php 
//tipos de dados basicos
$name = "Foa";
$site = 'www.foa.com.py';
$year = 2021;
$payment = 5500.00;
$block = FALSE; 


//tipos de dados em arrays que sao do tipo compostos

$frutas = array("manga", "laranja", "banana");

//tipo de dados com datas sao do tipo objetos

$nascimento = new DateTime();

// echo "<pre>";
// var_dump($nascimento); exit();
// echo "<pre>";


//tipos de dados resource

$files = fopen("variaveis01.php", "r");

// echo "<pre>";
// var_dump($files); exit();
// echo "<pre>";


//tipo de dados do tipo NULO (especiais)
//nulo eh ausencia de valor.
//vazio foi iniciado mais nao tem nada e foi reservado um espaco na memoria

$nulo = NULL;
$vazio = "";

?>