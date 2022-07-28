<?php

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

// testo la classe padre e dopodichè la cancello dal foglio index.php
require_once __DIR__ . '/ProdottoBase.php';
$purina = new ProdottoBase('Crocchette', 19.5 , 'Cibo' );
var_dump($purina);



?>