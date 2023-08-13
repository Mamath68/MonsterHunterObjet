<?php

namespace Models\Entities;

use Core\Entity;

final class Mangas extends Entity
{

    private $id;
    private $name;
    private $story;
    private \DateTime $releaseDate;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStory()
    {
        return $this->story;
    }

    public function setStory($story)
    {
        $this->story = $story;
    }
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate->format("d/m/Y");
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = new \DateTime($releaseDate);
        return $this;
    }


    public function __toString()
    {
        return $this->getId() . " " . $this->getName() . " " . $this->getStory() . " " . $this->getImg() . " " . $this->getReleaseDate();
    }
}