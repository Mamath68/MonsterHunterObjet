<?php

namespace Models\Entities;

use Core\Entity;

final class Anime extends Entity
{

    private $id;
    private $animeName;
    private $histoire;
    private $img;

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

    public function getAnimeName()
    {
        return $this->animeName;
    }

    public function setAnimeName($animeName)
    {
        $this->animeName = $animeName;
    }

    public function getHistoire()
    {
        return $this->histoire;
    }

    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;
    }
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getAnimeName() . " " . $this->getHistoire() . " " . $this->getImg();
    }

}