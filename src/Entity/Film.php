<?php

namespace App\Entity;

class Film{

    private $id;
    private $title;
    private ?int $year;
    private ?string $genre;
    private ?string $sypnosis;
    private ?string $director;
    private \DateTime $deleted_at;
    private \DateTime $created_at;
    private \DateTime $updated_at;

    public function __contruct(int $id, string $title, int $year, string $genre, string $sypnosis, string $director, \DateTime $deleted_at,\DateTime $created_at, \DateTime $updated_at ){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->sypnosis = $sypnosis;
        $this->director = $director;
        $this->deleted_at = $deleted_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function getId():int{
        return $this->id;
    }
    public function getTitle():string{
        return $this->title;
    }

    public function getYear():int{
        return $this->year;
    }

    public function getGenre():string{
        return $this->genre;
    }

    public function getSypnosis():string{
        return $this->sypnosis;
    }

    public function getDirector():string{
        return $this->director;
    }

    public function getDeleted_at():\DateTime{
        return $this->deleted_at;
    }
    public function getCreated_at():\DateTime{
        return $this->created_at;
    }
    public function getUpdated_at():\DateTime{
        return $this->updated_at;
    }


    public function setTitle(string $title):void{
        $this->title=$title;
    }
    public function setYear(string $year):void{
        $this->year=$year;
    }
    public function setGenre(string $genre):void{
        $this->genre=$genre;
    }
    public function setSypnosis(string $sypnosis):void{
        $this->sypnosis=$sypnosis;
    }
    public function setDirector(string $director):void{
        $this->director=$director;
    }
    public function setDeleted_at(string $deleted_at):void{
        $this->deleted_at=$deleted_at;
    }
    public function setCreated_at(string $created_at):void{
        $this->created_at=$created_at;
    }
    public function setUpdated_at(string $updated_at):void{
        $this->updated_at=$updated_at;
    }

}


?>