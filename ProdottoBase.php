<?php
    // creo la classe base
    class ProdottoBase {

        public $nome;
        public $prezzo;
        public $categoria;
       

        // inserisco gli elementi necessari
        public function __construct($_nome, $_prezzo, $_categoria){
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;
        }


    }
?>