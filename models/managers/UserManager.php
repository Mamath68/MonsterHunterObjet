<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class UserManager extends Manager
{

    protected $className = "Models\Entities\User";
    protected $tableName = "user";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneByPseudo($data, $order = null)
    {
        $orderQuery = ($order) ?
            "ORDER BY " . $order[0] . " " . $order[1] :
            "";
        $sql = "SELECT *
        FROM " . $this->tableName . " u
        WHERE u.pseudo = :pseudo
        " . $orderQuery;
        ;

        return $this->getOneOrNullResult(
            DAO::select($sql, ['pseudo' => $data], false),
            $this->className
        );
    }

    public function updateUser($sql, $params)
    {
        DAO::update($sql, $params);
    }
}