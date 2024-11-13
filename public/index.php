<?php
require("./../Router.php");
//$request = $_SERVER['REQUEST_URI'];
$request = new Router();
echo $request->route();

if(isset($request)){
    echo "test";
    switch($request){
        case "Projet1":
            $location = "./../Projet1.php";
            require $location;
            break;
        case"ListeFilm":
            $location = "./../ListeFilm.php";
            require $location;
            break;
        }
}

?>