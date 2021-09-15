<?php 
  $filename = "usuarios.csv";

  //se existir o arquivo entra neste
  if(file_exists($filename)) { 
    $file = fopen($filename, "r");

    //pegar o cabecalho somente a primeira linha
    $headers = explode(",", fgets($file));
    $data = array();

    //enquanto tiver linha faça por isso usamos o while (enquanto). Equanto retornar TRUE fica dentro do while, se retornar FALSE sai do while
    while ($row = fgets($file)) {
      $rowData = explode(",", $row);
      $linha = array();
      
      //criar o array chave valor precisamos pegar o nome da chave e o valor
      for ($i=0; $i < count($headers) ; $i++) { 
        $linha[$headers[$i]] = $rowData[$i];
      }

      //adiciona na variavel array data a variavel linha que é um array chave valor que esta dentro do while que sera repitido enquanto tiver linha
      array_push($data, $linha);
    }

     fclose($file);
    //var_dump($data);
    echo json_encode($data);
  }
