<?php
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/user.php";
require_once __DIR__ . "/classes/employee.php";

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);

// BONUS:
// Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

// PRODOTTI
$birra_ghiande = new Product("Birra di Ghiande Autunnale", "una birra leggera che fa bene a te e alla natura.", 3, 1.23);

$birra_ferroscuro = new Product("Birra dei Ferroscuro", "la famosa birra dei Ferroscuro.", 4, 2.32);

// UTENTE
$nowUser = new Employee("Magnaras", "Oltrevuoto", 35, true);

// CREDIT CARDS
$nowUser->setCard(123, 00, 10);
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
            background-color: #bbb;
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
        <p><?= "Prezzo: " . $birra_ghiande->getPrice($nowUser->user_discount) ?></p>
    </div>
    <div>
        <h3><?= $birra_ferroscuro->getName() ?></h3>
        <p><?= $birra_ferroscuro->getDescription() ?></p>
        <p><?= "valutazione: " . $birra_ferroscuro->getStars() ?></p>
        <p><?= "Prezzo: " . $birra_ferroscuro->getPrice($nowUser->user_discount) ?></p>
    </div>
</body>
</html>