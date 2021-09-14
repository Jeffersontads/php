<?php 
$images = scandir("images");

//vamos transformar em JSON 
$data = array();


foreach ($images as $imgItens) {
    //in_array faz uma busca dentro do array aqui neste caso esta dizendo assim. Se não existir o . e o .. faça tal coisa
    if (!in_array($imgItens, array('.', '..'))) {
        $filename = "images" .DIRECTORY_SEPARATOR . $imgItens;
        $infofile = pathinfo($filename);

        //pegar o tamanho do arquivo
        $infofile["size"] = filesize($filename);

        //pegando a data de modificação
        $infofile["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        
        //acessar o arquivo via url para
        $infofile["url"] = "http://localhost:3000/DIR/".str_replace("\\", "/", $filename);

        
        array_push($data, $infofile);
    }

    echo json_encode($data);
}
?>