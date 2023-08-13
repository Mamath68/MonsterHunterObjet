<?php

namespace Models\Entities;

use Core\Entity;

final class Casting extends Entity
{

    private $castingMangasId;
    private $castingAuteurId;
    private $poste;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function getCastingMangasId()
    {
        return $this->castingMangasId;
    }

    public function setCastingMangasId($castingMangasId)
    {
        $this->castingMangasId = $castingMangasId;
    }

    public function getCastingAuteurId()
    {
        return $this->castingAuteurId;
    }

    public function setCastingAuteurId($castingAuteurId)
    {
        $this->castingAuteurId = $castingAuteurId;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    public function __toString()
    {
        return $this->getCastingMangasId() . " " . $this->getCastingAuteurId() . " " . $this->getPoste();
    }
}