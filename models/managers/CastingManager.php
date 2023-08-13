<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class CastingManager extends Manager
{

    protected $className = "Models\Entities\Casting";
    protected $tableName = "casting";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {

        $sql = "SELECT a.id_auteur, a.auteurName, c.poste, m.id_mangas
        FROM " . $this->tableName . " c
        INNER JOIN auteur a ON a.id_auteur = c.castingAuteurId
        INNER JOIN mangas m ON m.id_mangas = c.castingMangasId
        WHERE c.castingMangasId = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

}