<?php
class Prodotti{
    protected $nome;
    protected $prezzo;
    protected $descrizione;

    function __construct($_nome,$_prezzo, $_descrizione)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;   
    }
}
?> 