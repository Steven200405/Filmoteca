<?php
declare(strict_types=1);

namespace App\Controller;


use App\Repository\FilmRepository;
use App\Core\TwigEnvironment;
use App\Entity\Film;

class FilmController extends TwigEnvironment
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
        echo $this->twig->render('listView.html.twig',['films'=>$films]);
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['titre'] && $_POST['type']){
            $film = new Film();
            $film->setTitle($_POST['titre']);
            $film->setYear($_POST['annee']);
            $film->setType($_POST['synopsis']);
            $film->setDirector($_POST['director']);
            $film->setCreatedAt((new \DateTime()));
            $film->setUpdatedAt((new \DateTime()));
            $filmRepository = new FilmRepository();
            $result = $filmRepository->createFilm($film);
            if($result){
                "Ajout réussi dans la base de données !";
            }
            else{
                "L'ajout du film dans la base de données n'a pas abouti.";
            }
        }

        echo $this->twig->render('create.html.twig');

        

    }

    public function read(array $params)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->getFilm((int)$params['id']);

        echo $this->twig->render('readView.html.twig',['film'=>$film]);
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