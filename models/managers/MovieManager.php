<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class MovieManager extends Manager
{

    protected $className = "Models\Entities\Movies";
    protected $tableName = "movies";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {
        $sql = "SELECT m.id_movies, m.name, m.img, m.releaseDate, m.story
                FROM " . $this->tableName . " m
                WHERE m.id_movies = :id
                ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}