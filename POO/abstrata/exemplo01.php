<?php 
/**
 * Uma classe pode implementar varias interfaces
 * interfaces é como um contrato, temos que seguir exatamente isso quando vamos implementar uma classe
 * o Senior é o cara que ira criar as interfaces
 * interfaces ajuda a organizar o código, trabalhar em equipe e também na integração com as apis
 */
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

//qualquer automovel implemetna a interface veiculo (precisa ter os metodos atributos que estao acima) só que nao pode instanciar um automovel porque ela é abstrata
abstract class Automovel implements Veiculo 
{

    public function acelerar($velocidade) 
    {
        echo "O veiculo acelerou até " . $velocidade . "Km/H";
    }

    public function frenar($velocidade) 
    {
        echo "O veiculo frenou até " . $velocidade . " Km/H";
    }

    public function trocarMarcha($marcha) 
    {
        echo "O veiculo trocou de marcha quando estava á " . $marcha . "  Km/H";
    }

}

class DelRey extends Automovel 
//aqui ele pode ter os metodos especificos no caso do carro delrey que pode ser diferente de outras carros
{ 
    public function empurrar() 
    {

    }
}
$carro = new DelRey();
$carro->acelerar(300);

?>