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

//criamos um objeto para estanciar esta classe que criamos
// veja que mesmo acessando de fora a classe quando é public conseguimos acessar
//quem pode acessar PROTECTED somente metodos que estao dentro da classe ou quem HERDA da classe assim como o PRIVATE
//a diferenca entre pricado e protegido é que nem mesmo os herdeiros vao conseguir acessar essa classe

$objeto = new Pessoa;

//echo $objeto->senha ."<br/>";

//como o metodo ~e public todos os dados aparecem
$objeto->verDados();

?>