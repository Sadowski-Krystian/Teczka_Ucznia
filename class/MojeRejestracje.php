<?php

class MojeRejestracje implements iLista, iEksportPDF, iEksportCSV, iKontroler{
    private $etykieta = 'Moje rejestracje';
    public function nazwa(){
        return get_class($this);
    }
    public function etykieta(){
        return $this->etykieta;
    }
    public function listaElemetow(){}
    public function pobierzElement(){}
    public function doPlikuCsv(){}
    public function doPlikuPdf(){}
}

?>