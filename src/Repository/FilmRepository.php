<?php

namespace App\Model;

class FilmRepository{

    private $dsn = 'mysql:dbname=film;host=127.0.0.1';
    private $user='filmoteca_user';
    private $password= 'filmoteca_password';

    private $idcon = new \PDO($dsn,$user,$password);

    public function addFilm(string $title, string $year,string $type, string $genre, string $sypnosis, string $director){
        $dateCreate=date('Y-m-d H:i:s');
        $dateDelete= new \DateTime('0000-00-00 00:00:00');
        $dateUpdate=date('Y-m-d H:i:s');

        $sql = $this->idcon->prepare("INSERT INTO film(id,title,year,type,sypnosis,director,deleted_at,created_at,update_at) VALUES (:titre,:annee,:type,:sypnosis,:director,:dateD,:dateC,:dateU");
        $sql->bindParam(':titre',$title);
        $sql->bindParam(':annee',$year);
        $sql->bindParam('type',$type);
        $sql->bindParam('sypnosis',$sypnosis);
        $sql->bindParam('director',$director);
        $sql->bindParam('dateD',$dateDelete);
        $sql->bindParam('dateC',$dateCreate);
        $sql->bindParam('dateU',$dateUpdate);
        return $sql->execute();
    }
    public function getAllFilm(){

    }

    public function getFilm(int $id){

    }

    public function deleteFilm(int $id){

    }

    public function updateFilm(int $id,string $title, string $year, string $genre, string $sypnosis, string $director){
        
    }
}

?>