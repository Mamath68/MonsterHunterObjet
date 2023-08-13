<?php

namespace Models\Entities;

use Core\Entity;

final class Mangas extends Entity
{

    private $id;
    private $mangasName;
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

    public function getMangasName()
    {
        return $this->mangasName;
    }

    public function setMangasName($mangasName)
    {
        $this->mangasName = $mangasName;
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
        return $this->getId() . " " . $this->getMangasName() . " " . $this->getHistoire() . " " . $this->getImg();
    }

}