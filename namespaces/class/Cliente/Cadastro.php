<?php 

namespace Cliente;

//a barra diz pra ele voltar la na raiz e procurar lá o Cadastro
    class Cadastro extends \Cadastro
    {
        public function registrarVenda() 
        {
            echo "Exemplo que foi registrado uma venda para o cliente ". $this->getNome();
        }
    }

?>