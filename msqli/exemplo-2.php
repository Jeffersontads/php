<?php
/**COM ESTAS INFORMACOES EM FORMA DE JSON PODEMOS USAR E CRIAR O FRONT END FACIL! 
 * TRANFORMAMOS TUDO EM JSON (DADOS JSON) E AGORA É SÓ CONSUMIR! 
*/

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}
// retorna um resultado la do banco, pegamos esse resultado e guardamos em uma variavel
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
// guardar dados e vou falar q é um array.
$data = array();
//pegamos a variavel result e verificamos se tem alfum dado usando o fetch_array
while ($row = $result->fetch_assoc()) {

    //aqui eu falo que é um json com array_push ou seja transformo os dados em json
    array_push($data, $row);

}
//mostro o array (JSON)
echo json_encode($data);

?>