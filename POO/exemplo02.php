<?php 
class Carro {
  
  private $modelo;
  private $motor;
  private $ano;

  /**
   * Get the value of modelo
   */ 
  public function getModelo()
  {
    return $this->modelo;
  }
  

  /**
   * Set the value of modelo
   *
   * @return  self
   */ 
  public function setModelo($modelo)
  {
    $this->modelo = $modelo;
  }

  /**
   * Get the value of motor
   */ 
  public function getMotor():float
  {
    return $this->motor;
  }

  /**
   * Set the value of motor
   *
   * @return  self
   */ 
  public function setMotor($motor)
  {
    $this->motor = $motor;
  }

  /**
   * Get the value of ano
   */ 
  public function getAno():int
  {
    return $this->ano;
  }

  /**
   * Set the value of ano
   *
   * @return  self
   */ 
  public function setAno($ano)
  {
    $this->ano = $ano;
  }

  //metodo que mostre toda as infos deste veiculo

  public function exibir() { 
    return array(
      "modelo"=>$this->getModelo(),
      "motor"=>$this->getMotor(),
      "ano"=>$this->getAno()
    );
  }
}
$gol = new Carro;
$gol->setModelo("Gol GT");
$gol->setMotor("1.8");
$gol->setAno("2000");

var_dump($gol->exibir());

?>