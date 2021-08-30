<?php 
/**
 * Foreach significa para cada é usado para percorrer arrays e coleções. 
 * É um tipo de laço de repetição. Para cada item que existir execute.
 */

//se nao estiver vazia
if(isset($_GET)){

    foreach( $_GET as $key => $valor ){ 
    echo "Nome do campo: " .$key."<br>";
    echo "Valor do campo: " .$valor;
    echo "<hr>";
    }
}

?>
<form>
<input type="text" name="Seila" id="nome">
<input type="date" name="nome" id="nascimento">
<button type="submit">Enviar</button>
</form>