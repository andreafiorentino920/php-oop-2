<?php
require_once __DIR__ . "/Utente.php";

class UtentePremium extends Utente {
    private $sconto;
    function __construct($_nome,$_cognome,$_eta)
    {
        parent::__construct($_nome,$_cognome,$_eta);
        if($this->eta >= 30){
            $this->sconto = "25%";
        }
    }
}
