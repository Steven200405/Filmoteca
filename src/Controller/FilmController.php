<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;

class FilmController
{
    public function list(array $params)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        /*$filmEntities = [];
        foreach($films as $film){
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSypnosis($film['sypnosis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setCreatedAt(new \DataTime($film['created_at']));
            $filmEntity->setDeletedAt(new \DataTime($film['deleted_at']));
        }
        dd($filmEntities);*/

        /*header('Content-Type: application/json');
        echo json_encode($films);*/

        require __DIR__ . '/../views/listView.php';

    }

    public function create()
    {
        
        echo "Création d'un film";
    }

    public function read(array $params)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->getFilm((int)$params['id']);

        require __DIR__ . '/../views/readView.php';
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
    
    /*
    public function list(array $queryParams){
        $film = $this->filmModel->getAllFilms();
    }
    public function create(array $queryParams){
        if(isset((int) $queryParams['id']) && isset($queryParams['title']) && isset($queryParams['year']) && isset($queryParams['genre']) && isset($queryParams['sypnosis']) && isset($queryParams['director'])){
            $result = $this->filmModel->addFilm($queryParams['title'], $queryParams['year'], $queryParams['genre'], $queryParams['sypnosis'], $queryParams['director']);
            
            if($result){
                echo "Ajout d'un film réussi";
            }
            else{
                echo "L'ajout a rencontré un problème";
            }
        }
        else{
            echo "Information manquante";
        }        
    }
    public function read(array $queryParams){
        if(isset($params['id'])){
            $film = $this->filmModel->getFilm((int)$params['id']);
        }
        echo "Id manquante";
    }
    public function update(array $queryParams){
        if(isset((int) $queryParams['id']) && isset($queryParams['title']) && isset($queryParams['year']) && isset($queryParams['genre']) && isset($queryParams['sypnosis']) && isset($queryParams['director']) && isset($queryParams['created_at'])){
            $result = $this->filmModel->updateFilm((int) $queryParams['id'],$queryParams['title'], $queryParams['year'], $queryParams['genre'], $queryParams['sypnosis'], $queryParams['director'], $queryParams['created_at']);
            echo "Mise à jour d'un film réussi";
        }
        else{
            echo "Information manquante";
        }        
    }
    public function delete(array $queryParams){
        if(isset((int)$queryParams['id'])){
            $result = $this->filmModel->deleteFilm((int)$queryParams['id']);
        }
        else{
            echo "Id non trouvée, impossible de supprimer le film avec cet ID";
        }
    }
    */
}