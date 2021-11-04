<?php

require_once __DIR__ . "/classes/Prodotti.php";
require_once __DIR__ . "/classes/Utente.php";
require_once __DIR__ . "/classes/UtentePremium.php";
require_once __DIR__ . "/classes/Libri.php";

$andrea = new UtentePremium("Andrea","Fiorentino", 33);
$codiceDaVinci = new Libri("Il Coidce Da Vinci", "30", "loremdajasdhsajdhjash");
$codiceDaVinci -> setAutore("Dan Brown");
var_dump($codiceDaVinci);
var_dump($andrea);
