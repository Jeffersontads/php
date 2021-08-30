<?php 
/**
 * No linux o padrão é escrito de uma maneira e no windows 
 * é de outro jeito o certo é deixar os 3 padroes. "pt_BR", "pt_BR.utf-8", "portuguese"
 * LC_ALL SIGNIFICA MUDE TODA A CONFIGURAÇÃO PARA O QUE EU ESCOLHER NO CASO AQUI PORTUGUES.
 * 
 */
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B");

?>