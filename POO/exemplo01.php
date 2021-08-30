<?php 

class Pessoa {
//atributos
//esta dentro de uma classe mais esta fora de uma classe, eu preciso usar $this para referenciar essa atributo dentro do metodo
  public $name;

//metodo
public function falar() {
    return "o meu nome é ". $this->name; //$this é a representacao da classe e devo utilizar $this sempre que quiser referenciar esse atributo dentro de um metodo
  } 

}

$rodrigo = new Pessoa;

$rodrigo->name = "Jefferson Rodrigo";
echo $rodrigo->falar();

?>