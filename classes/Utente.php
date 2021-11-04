<?php
class Utente{
    private $nome;
    private $cognome;
    protected $eta;
    private $cartaDiCredito = [];

    function __construct($_nome,$_cognome,$_eta)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
    }
    function setCartaDiCredito($_cc)
    {
        $this->cartaDiCredito[] = $_cc;
    }
}
?> 