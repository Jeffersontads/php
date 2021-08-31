<?php 
//classes sempre com letras maiusculas assim como o nome do arquivo.
//windows nao é case sensitive ja unix sim!

    class Cadastro 
    {
        private $nome;
        private $senha;
        private $email;

        /**
         * Get the value of nome
         */ 
        public function getNome():string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha():string
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
         * Get the value of email
         */ 
        public function getEmail():string
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function __toString()
        //vamos criar um metodo para exibir os objetos
        {
            return json_encode(array
            (
                    "nome" => $this->getNome(),
                    "senha" => $this->getSenha(),
                    "email" => $this->getEmail()
            ));
        }
    }

?>