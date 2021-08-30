<?php 

/**
 * tranformando um JSON em array e nao esquecer de usar o TRUE porque senao ele vira objeto.
 */
$json = '[{"nome": "Jose","idade": 20},{"nome": "Rodrigo","idade": 38}]';

$data = json_decode($json, true);
var_dump($data);
?>