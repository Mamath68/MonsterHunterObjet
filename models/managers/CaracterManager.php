<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class CaracterManager extends Manager
{

    protected $className = "Models\Entities\Caracters";
    protected $tableName = "caracters";

    public function __construct()
    {
        parent::connect();
    }

    public function findAll()
    {


        $sql = "SELECT p.id_personnages, CONCAT(p.prenom,' ',p.nom) AS Personnage,ap_a.img
        FROM personnages p
        INNER JOIN appartenir_anime ap_a ON p.id_personnages = ap_a.id_personnages
        INNER JOIN appartenir_mangas ap_m ON p.id_personnages = ap_m.id_personnages";

        return $this->getMultipleResults(
            DAO::select($sql, true),
            $this->className
        );
    }
}