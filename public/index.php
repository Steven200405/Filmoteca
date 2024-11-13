<?php
$request = $_SERVER['REQUEST_URI'];

if(isset($request)){
    if($request=="/Projet1"){
        $location = "./../Projet1.php";
        require $location;
    }
    elseif($request=="/ListeFilm"){
        $location = "./../ListeFilm.php";
        require $location;
    }
    else{
        require "temp.php";
    }

}

?>