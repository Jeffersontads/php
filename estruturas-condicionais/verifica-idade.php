<?php 


    $nome = $_POST['nome'];
    $qualSuaIdade = $_POST['idade'];
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idoso = 65;

if ($qualSuaIdade <= $idadeCrianca ) 
{
    echo strtoupper($nome)." "."Este cabra é uma criança!";
}
elseif ($qualSuaIdade > $idadeCrianca && $qualSuaIdade < $idadeMaior) 
{
    echo strtoupper($nome)." "."Este cabra é um JOVEM!";
}
elseif ($qualSuaIdade >= $idadeMaior && $qualSuaIdade < $idoso)
{
    echo strtoupper($nome)." "."Este cabra é um ADULTO";
}
elseif ($qualSuaIdade >= $idoso)
{
    echo strtoupper($nome)." "."Este cabra é um IDOSO";
}
else 
{
    echo strtoupper($nome)." "."Não sei o que ele é não!";
}

echo "<br>";
//o sinal de ? em um operador ternario significa entaum se for verdade e o : significa  senao (false). Podemos usar isso todo vez que temos uma condição simples, rapida.

echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade!" : "Maior de idade!";


?>