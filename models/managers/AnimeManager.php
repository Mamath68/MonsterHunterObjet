<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class AnimeManager extends Manager
{

    protected $className = "Models\Entities\Anime";
    protected $tableName = "anime";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {
        $sql = "SELECT a.id_anime,a.animeName,a.img, a.histoire
        FROM " . $this->tableName . " a
        WHERE a.id_anime = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}