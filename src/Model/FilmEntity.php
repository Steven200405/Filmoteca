<?php

namespace App\Model;

class FilmEntity{

    public $id;
    public $title;
    public $year;
    public $genre;
    public $sypnosis;
    public $director;
    public $deleted_at;
    public $created_at;

    public function __contruct(int $id, string $title, string $year, string $genre, string $sypnosis, string $director, string $deleted_at,string $created_at ){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->sypnosis = $sypnosis;
        $this->director = $director;
        $this->deleted_at = $deleted_at;
        $this->created_at = $created_at;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }

    public function getYear(){
        return $this->year;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getSypnosis(){
        return $this->sypnosis;
    }

    public function getDirector(){
        return $this->director;
    }

    public function getDeleted_at(){
        return $this->deleted_at;
    }
    public function getCreated_at(){
        return $this->created_at;
    }



}


?>