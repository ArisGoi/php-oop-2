<?php
require_once __DIR__ . "/classes/product.php";

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);

// BONUS:
// Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

// PRODOTTI
$birra_ghiande = new Product("Birra di Ghiande Autunnale", "una birra leggera che fa bene a te e alla natura.", 3, 1.23);

// UTENTE
// $nowUser = new User ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festa della Birra</title>
    <style>
        div{
            background-color: gray;
            margin: 15px;
            padding: 10px 15px;
        }
    </style>
</head>
<body>
    <h2>Negozio, Festa della Birra</h2>
    
    <div>
        <h3><?= $birra_ghiande->getName() ?></h3>
        <p><?= $birra_ghiande->getDescription() ?></p>
        <p><?= "valutazione: " . $birra_ghiande->getStars() ?></p>
        <p><?= "Prezzo: " . $birra_ghiande->getPrice() ?></p>
    </div>
</body>
</html>