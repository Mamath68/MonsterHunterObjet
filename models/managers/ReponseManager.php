<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class ReponseManager extends Manager
{

    protected $className = "Models\Entities\Reponse";
    protected $tableName = "reponse";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {

        $sql = "SELECT r.id_reponse, r.body, r.img, r.reponseDate
                FROM " . $this->tableName . " r
                WHERE r.id_reponse = :id
                ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findCommentsByComment($id)
    {
        $sql = "SELECT r.id_reponse, r.body, r.img, r.reponseDate, c.id_comment
        FROM " . $this->tableName . " r
        INNER JOIN COMMENT c 
        ON c.id_comment = r.comment_id
        WHERE r.comment_id = :id
        ";
        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}