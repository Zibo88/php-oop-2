<?php

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

// testo la classe padre e dopodichè la cancello dal foglio index.php
// require_once __DIR__ . '/ProdottoBase.php';
// $purina = new ProdottoBase('Crocchette', 19.5 , 'Cibo' );
// var_dump($purina);

    require_once __DIR__ . '/CiboPerAnimali.php';
    require_once __DIR__ . '/GiochiPerAnimali.php';
    require_once __DIR__ . '/AccessoriPerAnimali.php';
    
    // importo un nuovo padre relativo all'utente
    // require_once __DIR__ . '/Utente.php';

    require_once __DIR__ . '/UtenteNonRegistrato.php';
    require_once __DIR__ . '/UtenteRegistrato.php';

    // creo un array vuoto cdove andrò ad inserire gli utenti
    $userArray= [];

    // PRODOTTI///////////

        // CIBO
    $friskies = new CiboPerAnimali('Friskies', 19 , 'Cibo','Crocchette' );
    // var_dump($friskies);

    $oneMini = new CiboPerAnimali ('One Mini', 25, 'Cibo' ,'Bocconcini');
    // var_dump($oneMini);

    //GIOCHI
    $palla = new GiochiPerAnimali('Palla di gomma', 10 , 'Giochi');
    $palla->materiale = 'plastica';
    // var_dump($palla);

    $trixieJuniorOrso = new GiochiPerAnimali ('Trixie Junior Orso', 34, 'Giochi');
    $trixieJuniorOrso->materiale = 'Tessuto';
    // var_dump($trixieJuniorOrso);

    // ACCESSORI
    $gunzaglioCani = new AccessoriPerAnimali('Guinzaglio', 15, 'accessori', 'grande');
    // var_dump($gunzaglioCani);

    $cuccia = new AccessoriPerAnimali('Cuccia', 50, 'accessori', 'grande');
    $cuccia->materiale = 'legno';
    // var_dump($cuccia);

    // testo il padre degli utenti
    //  $mario = new Utente('mario', 'rossi', 'mariorossi@mail.it', 'Via Nazionale 136, Roma');
    // var_dump($mario);


    // UTENTI/////////////////////////////////

    // utenti non registrati
    $claudio = new UtenteNonRegistrato('Claudio', 'Bianchi',  'claudiobianchi@mail.it', 'Via Nazionale 136, Roma');
    // richiamo la funzione di scelta dei prodotti
    $claudio->prodottiScelti($palla);
    $claudio->prodottiScelti($friskies);
    // richiamo la funzione che da il totale da pagare
    $claudio->prezzoTotale();

   $userArray[] = $claudio;
 
    // utenti registrati
    $maria = new UtenteRegistrato('Maria', 'Verdi',  'mariaverdi@mail.it', 'Via Vittorio emanuele 16, Roma');
    $maria->prodottiScelti($cuccia);
    $maria->prodottiScelti($oneMini);
    $maria->prezzoTotale();
    $userArray[] = $maria;
    

    // var_dump($userArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Animal Shop</title>
</head>
<body>
    
    <!-- stampo a monitor -->
    <div class="container">
        <?php foreach ($userArray as $user) { ?>
            <div class='user-name-lastname'>
                <div>Ciao</div>
                <span class='name'><?php echo $user->nome ?></span>
                <span class='cognome'> <?php echo $user->cognome ?></span>
                <span>
                     <!-- dato che l'user ha diversi attributi seleziono i prodotti scelti tramite $user->prodottiScelti -->
                     <h3>I prodotti selezionati sono:</h3>
                    <?php foreach($user->prodottiScelti as $typo) { ?> 
                        <div><?php echo $typo->nome ?></div>
                    <?php }?>
                </span>
            </div>

           
            <div> Il prezzo totale è di: <?php echo  $user->prezzoTotale()?> € </div>
            <div>La fattura è stata inviata all'indirizzo: <?php echo $user->email?> </div>
           
            
        <?php }?>
 
    </div>

    <div>
        
    </div>
</body>
</html>