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

        // funzione che permette di aggiungere elementi al carrello
        public function prodottiScelti($prodotto){
             $this->prodottiScelti[] = $prodotto; 
            // var_dump($prodotto);
            // echo($prodotto->nome);

            
        }

        public function getProdottiScelti(){
            return $this->prodottiScelti;
        }

        // creata funzione che ritorna il prezzo totale da pagare
        public function prezzoTotale(){
            // inizializzo la somma a 0
             $sum = 0;

            // avvio un ciclo foreach che per ogni singolo $prodotto all'interno di $this->prodottiScelti
             foreach($this->prodottiScelti as $prodotto){
                //  var_dump($prodotto);
                // somma alla somma iniziale il prezzo del prodotto
                 $sum += $prodotto->prezzo;
             }
            
            //  var_dump($sum);

            // calcolo il prezzo finale

            $sum -= $sum * $this->sconto / 100;

            // ritornerà la somma dei prodotti selezionati con o senza lo sconto
            return $sum;


             
        }
            
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>