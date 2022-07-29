<?php
    

    require_once __DIR__ . '/ProdottoBase.php';
    // creo una nuova classe che estenderà quella di base
    class AccessoriPerAnimali extends ProdottoBase {
        
        // aggiungo un nuovo attributo al construct di base
        public $size;

         // inserisco gli elementi necessari
         public function __construct($_nome, $_prezzo, $_categoria, $_size){
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;
            $this->size = $_size;

        }

    }



?>