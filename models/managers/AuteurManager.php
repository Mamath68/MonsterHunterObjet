<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class AuteurManager extends Manager
{

    protected $className = "Models\Entities\Auteur";
    protected $tableName = "auteur";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {
        $sql = "SELECT c.castingAuteurId,a.auteurName, c.poste, c.castingMangasId, m.mangasName
        FROM " . $this->tableName . " a
        INNER JOIN casting c ON a.id_auteur = c.castingAuteurId
        INNER JOIN mangas m ON m.id_mangas = c.castingMangasId
        WHERE c.castingAuteurId = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

}