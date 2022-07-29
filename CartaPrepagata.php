<?php

    require_once __DIR__ . '/Utente.php';

    class CartaPrepagata extends Utente {

        public $numero;
        
        public $saldo = 0;

        public $nomeCarta;

        public function __construct($_numero, $_nomeCarta){
            $this->nomeCarta= $_nomeCarta;
            $this->numero= $_numero;
            
    
        }

       





    }

?>