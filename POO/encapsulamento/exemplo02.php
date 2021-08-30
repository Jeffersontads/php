<?php 

class Pessoa {

    public $nome = "Rasmus Lerdoff";
    protected $idade = 48;
    private $senha = "123";

    // vamos criar uma funcao para mostrar exibir esses dados na tela

    public function verDados() {
        echo $this->nome ."<br/>";
        echo $this->idade ."<br/>";
        echo $this->senha ."<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados() {
        echo get_class($this)."<br/>";

        echo $this->nome ."<br/>";
        echo $this->idade ."<br/>";
        echo $this->senha ."<br/>";

    }
}

$objeto = new Programador;

$objeto->verDados();

?>