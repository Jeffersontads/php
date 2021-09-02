<?php 
//tipo do banco com todos os seus parametros
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

  $stmt =$conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
  $stmt->execute(); //mandamos a consulta pro banco

  //aqui ja vai fatiar todas as linhas e trazer todos os resultados usamos a consultante FETCH_ASSOC
  //$results= $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    // foreach ($results as $row) 
    // {
    //   foreach ($row as $key => $value) 
    //   {
    //     echo "<strong>".$key.": </strong>".$value."<br>";
    //   }
    //   echo "---------------------------------------------<br>";
    // }
//ou pdemos retornar esses dados em forma de json com o JSON_DECODE
$data = array();
while ($results = $stmt->fetchAll(PDO::FETCH_ASSOC)) {

  //aqui eu falo que é um json com array_push ou seja transformo os dados em json
  array_push($data, $results);

}
//mostro o array (JSON)
echo json_encode($data);
?>