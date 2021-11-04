<?php
require_once __DIR__ . "/Prodotti.php";

class Libri extends Prodotti{
    protected $autore;

    function setAutore($_autore)
    {
        $this->autore = $_autore;
    }
}