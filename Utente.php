<?php
    // creo un nuovo modello relativo all'utente in generale
    class Utente{

        // assegno gli attributi
        public $nome;
        public $cognome;
        public $email;
        public $indirizzo;
        public $sconto = 0;
        public $prodottiScelti = [];

        // assegno il __construct
        public function __construct($_nome, $_cognome, $_email, $_indirizzo){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->email = $_email;
            $this->indirizzo = $_indirizzo;
        }
    }
?>