<?php
declare(strict_types=1);
namespace App\Core;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class TwigEnvironment{

    protected $twig;
    
    public function __construct(){
        $loader=new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views');
        $this->twig= new \Twig\Environment($loader);
    }

}


?>