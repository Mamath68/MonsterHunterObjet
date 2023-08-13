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
        $sql = "SELECT m.id_mangas, m.mangasName, m.histoire, m.img
        FROM " . $this->tableName . " m
        WHERE m.id_mangas = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    // public function findCaractersByMangas($id)
    // {
    //     $sql = "SELECT m.id_mangas, m.mangasName, m.histoire, m.img, m.auteur_id, CONCAT(au.prenom, ' ', au.nom) AS 'Mangakas', c.id_caracters ,CONCAT(c.firstname,' ', c.name) AS 'Personnages'
    //     FROM " . $this->tableName . " m
    //     INNER JOIN auteur au 
    //     ON au.id_auteur = m.auteur_id
    //     INNER JOIN appartenir_mangas apm 
    //     ON m.id_mangas = apm.mangas_id
    //     INNER JOIN caracters c
    //     ON c.id_caracters = apm.caracters_id
    //     Where m.id_mangas = :id";

    //     return $this->getMultipleResults(
    //         DAO::select($sql, ['id' => $id], true),
    //         $this->className
    //     );
    // }

}