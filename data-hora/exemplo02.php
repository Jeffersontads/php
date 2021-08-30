<?php 

//$ts = strtotime("2001-09-11"); //pegando o timestamp desta data

$ts = strtotime("+1 week"); //pegando o timestamp da data de hoje essa funcao aceita expressoes para gerar o timestamp

echo date("l, d/d/Y", $ts);
?>
//setlocale posso definir em qual idioma estou