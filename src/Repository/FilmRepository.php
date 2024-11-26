<?php

namespace App\Repository;

use App\Core\DatabaseConnection;
use App\Service\EntityMapper;
use App\Entity\Film;

class FilmRepository
{
    private \PDO $db;
    private EntityMapper $entityMapperService;

    public function __construct()
    {
        $this->db = DatabaseConnection::getConnection();
        $this->entityMapperService = new EntityMapper();
    }

    public function findAll(): array
    {
        $query = 'SELECT * FROM film';
        $stmt = $this->db->query($query);

        $films = $stmt->fetchAll();

        return $this->entityMapperService->mapToEntities($films, Film::class);
        //return $films;
    }

    public function getFilm(int $id){
        $query = 'SELECT * FROM film where id =:id';
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id'=>$id]);

        $film=$stmt->fetch();
        return $this->entityMapperService->mapToEntity($film, Film::class);
    }
}