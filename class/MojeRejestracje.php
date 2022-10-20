<?php
//  implements iLista, iEksportPDF, iEksportCSV, iKontroler
class MojeRejestracje implements iKontroler, iLista{
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