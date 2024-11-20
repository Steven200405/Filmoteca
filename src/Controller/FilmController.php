<?php
namespace App\Controller;

class FilmController{
    private FilmModel $filmModel;

    public function __construct(){
        $this->filmModel = new FilmModel();
    }

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
}
?>