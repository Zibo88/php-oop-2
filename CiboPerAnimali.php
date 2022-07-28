<?php
    // richiamo la struttura base
    require_once __DIR__ . '/ProdottoBase.php';
    // creo una nuova classe che estenderà quella di base
    class CiboPerAnimali extends ProdottoBase {
        // aggiungo un nuovo attributo a questa classe
        public $indicatoPer;

        // modifico il __construct di base aggiungendo la nuova proprità come importante negli argomenti
        public function __construct($_nome, $_prezzo, $_categoria, $_indicatoPer){
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;
            $this->indicatoPer = $_indicatoPer;
            
        }

       

    }


?>