<?php

    class ProdottoBase {

        public $nome;
        public $prezzo;
        public $categoria;
        public $marca;

        public function __construct($_nome, $_prezzo, $_categoria){
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;
        }

    }
?>