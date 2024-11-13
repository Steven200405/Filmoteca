<?php
class Router{
    public function __construct(){

    }
    public function route(){
        $temp = trim($_SERVER['REQUEST_URI'],"/");
        return var_dump($temp);
    }
}
?>