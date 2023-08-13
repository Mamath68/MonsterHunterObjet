<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class PublicationManager extends Manager
{

    protected $className = "Models\Entities\Publication";
    protected $tableName = "publication";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {

        $sql = "SELECT p.id_publication, p.body, p.img, p.publicationDate, p.user_id
            FROM " . $this->tableName . " p
            WHERE p.id_publication = :id
            ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findAllPublications($order = null)
    {
        $orderQuery = ($order) ?
            "ORDER BY " . $order[0] . " " . $order[1] :
            "";
        $sql = "SELECT p.id_publication, p.body, p.img, p.publicationDate, p.user_id
        FROM " . $this->tableName . " p
        " . $orderQuery;
        ;

        return $this->getMultipleResults(
            DAO::select($sql),
            $this->className
        );
    }

    public function findPublicationsByUser($id, $order = null)
    {
        $orderQuery = ($order) ?
            "ORDER BY " . $order[0] . " " . $order[1] :
            "";
        $sql = "SELECT p.id_publication, p.body, p.img, p.publicationDate, p.id_user
        FROM  " . $this->tableName . " p
        INNER JOIN user u ON u.id_user = p.user_id
        WHERE p.user_id = :id
        " . $orderQuery;

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}