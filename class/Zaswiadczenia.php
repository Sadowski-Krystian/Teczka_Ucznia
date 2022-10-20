<?php
// implements iLista, iEksportPDF, iEksportCSV, iKontroler
class Zaswiadczenia implements iKontroler, iLista{
    private $etykieta = 'Zaświadczenia';
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