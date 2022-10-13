<?php

$dir = "./class/";
include($dir."TeczkaSzkolen.php");
include($dir."MojeRejestracje.php");
include($dir."Zaswiadczenia.php");

$vw = new View();
$ucz = new Uczestnik(13, 'Grzegorz', 'Petri', 'm', "2002-02-20", 'Gorzów', '789-123-456', 'gpetri@gplweb.pl');

$dp = new DanePersonalne(null, $ucz);
$mr = new MojeRejestracje($vw);
$za = new Zaswiadczenia();
$ts = new TeczkaSzkolen($dp, $vw);


$action = isset($_GET['act']) ? $_GET['act'] : 'intro';
$ts->dodajUsluge($dp);
$ts->dodajUsluge($mr);
$ts->dodajUsluge($za);
$lst = $ts->listaUslug();
$link = '#link';
$title = $ts->getTitle();
$body = $ts->render($action);
$lista = $vw->render('menu', $lst, $args=array('link'=>$link));
$args = array('osoba'=>$dp->wyswietlPersonalia(), 'body'=>$body);
$okno = $vw->render('okno', $lista, $args);
$html = $vw->render('dokumentHTML', $okno, $args=array('title'=>$title));
echo $html;

