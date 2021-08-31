<?php 

    class Documento {

        private $numero;

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($n)
        {
                $this->numero = $n;

                return $this;
        }
    }

    class CPF extends Documento {
        
        public function validar():bool 
        {
            $numeroCPF = $this->getNumero();

            return TRUE;
        }

    }

    $doc = new CPF;
    $doc->setNumero("111.111.111-00");
    var_dump($doc->validar());
    echo "<br />";

    echo $doc->getNumero();
?>