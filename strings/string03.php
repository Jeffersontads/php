<?php
//trocar string ele busca e faz a troca.
$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>