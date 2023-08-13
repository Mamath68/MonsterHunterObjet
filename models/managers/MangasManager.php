<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class MangasManager extends Manager
{

    protected $className = "Models\Entities\Mangas";
    protected $tableName = "mangas";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {
        $sql = "SELECT m.id_mangas, m.name, m.img, m.story, m.releaseDate
        FROM " . $this->tableName . " m
        WHERE m.id_mangas = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}