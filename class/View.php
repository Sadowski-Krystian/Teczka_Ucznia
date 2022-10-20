<?php

class View{

    public function render($szablon, $dane, $args=null){
        $pathFinder = "views/{$szablon}.php";
        if(file_exists($pathFinder)){
            include($pathFinder);
        }else{
            $out = "Szablon {$szablon} nie odnaleziony";
        }
        return $out;
    }
}