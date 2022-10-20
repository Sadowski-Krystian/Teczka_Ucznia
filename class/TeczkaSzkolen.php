<?php
class TeczkaSzkolen{
  private $dlaKogo;
  private $uslugi = array();
  
  // function __construct( $danePersonalne ){
  //   $this->dlaKogo = $danePersonalne;
  // }

  public function dodajUsluge( $usluga ){
    $this->uslugi[] = $usluga;
  }

  public function listaUslug(){
    $lista = array();
    foreach ($this->uslugi as $key => $usluga) {
        $lista[] = $usluga->etykieta();
    }
    return $lista;
  }

  public function init(){
    return "Demo kontrolera o nazwie Teczka Szkoleń";
  }
}

?>