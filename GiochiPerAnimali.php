<?php
    // richiamo la struttura base 
    require_once __DIR__ . '/ProdottoBase.php';

    // creo una nuova classe che estenderà quella di base
    class GiochiPerAnimali extends ProdottoBase {
        // aggiungo un attributo alla nuova classe
        public $materiale;
    }


?>