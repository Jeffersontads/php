<?php 
//cclasse para o user
class Usuario {
  private $idusuario;
  private $deslogin;
  private $senha;
  private $dtcadastro;

  /**
   * Get the value of idusuario
   */ 
  public function getIdusuario()
  {
    return $this->idusuario;
  }

  /**
   * Set the value of idusuario
   *
   * @return  self
   */ 
  public function setIdusuario($idusuario)
  {
    $this->idusuario = $idusuario;

    return $this;
  }

  /**
   * Get the value of deslogin
   */ 
  public function getDeslogin()
  {
    return $this->deslogin;
  }

  /**
   * Set the value of deslogin
   *
   * @return  self
   */ 
  public function setDeslogin($deslogin)
  {
    $this->deslogin = $deslogin;

    return $this;
  }

  /**
   * Get the value of senha
   */ 
  public function getSenha()
  {
    return $this->senha;
  }

  /**
   * Set the value of senha
   *
   * @return  self
   */ 
  public function setSenha($senha)
  {
    $this->senha = $senha;

    return $this;
  }

  /**
   * Get the value of dtcadastro
   */ 
  public function getDtcadastro()
  {
    return $this->dtcadastro;
  }

  /**
   * Set the value of dtcadastro
   *
   * @return  self
   */ 
  public function setDtcadastro($dtcadastro)
  {
    $this->dtcadastro = $dtcadastro;

    return $this;
  }

  public function loadById($id) {
    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
      ":ID"=>$id
    ));

    if (count($results) > 0) {
      $row = $results[0];

      //pega os dados e mando para o setter
      $this->setIdusuario($row['idusuario']);
      $this->setDeslogin($row['deslogin']);
      $this->setSenha($row['senha']);
      $this->setDtcadastro(new DateTime ($row['dtcadastro']));
    }
  }

  public function __toString() {
    return json_encode(array(
      "idusuario"=>$this->getIdusuario(),
      "deslogin"=>$this->getDeslogin(),
      "senha"=>$this->getSenha(),
      "dtcadastro"=>$this->getDtcadastro()
    ));
  }
}
?>