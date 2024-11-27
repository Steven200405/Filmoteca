<?php
/*require("./../Router.php");
//$request = $_SERVER['REQUEST_URI'];
$request = new Router();
$request = $request->route();
if(isset($request)){
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
}*/

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/views');
$twig = new \Twig\Environment($loader);

$router = new Router();
$variable=$router->route();

$data=['films'=>$variable];

if(gettype($variable)=='array'){
    echo $twig->render('listView.html.twig',$data);
}
else{
    echo $twig->render('readView.html.twig',$data);

}
?>