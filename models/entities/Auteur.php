<?php

namespace Models\Entities;

use Core\Entity;

final class Auteur extends Entity
{

    private $id;
    private $auteurName;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAuteurName()
    {
        return $this->auteurName;
    }

    public function setAuteurName($auteurName)
    {
        $this->auteurName = $auteurName;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getAuteurName();
    }

}