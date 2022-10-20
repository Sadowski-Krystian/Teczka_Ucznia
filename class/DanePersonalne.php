<?php
class DanePersonalne implements iKontroler{
    private $etykieta = "dane personalne";
    private $link = "pers";
    private $imie;
    private $nazwisko;
    private $idOsoby = 0;
    private $zgloszenie;
    private $osoba;
    private $dane = array();

    function __construct($zgloszenie, $osoba){
        $this->zgloszenie = $zgloszenie;
        $this->osoba = $osoba;
    }
    public function nazwa(){
        return get_class($this);
    }
    public function etykieta(){
        return $this->etykieta;
    }
    public function link(){
        return $this->link;
    }

    public function wyswietlPersonalia() : String{
        return $this->osoba->get_Imie().' '.$this->osoba->getNazwisko();
    }



}