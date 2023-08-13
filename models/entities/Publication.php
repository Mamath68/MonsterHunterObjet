<?php

namespace Models\Entities;

use Core\Entity;

final class Publication extends Entity
{

    private $id;
    private $body;
    private \DateTime $publicationDate;
    private $user;
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

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getPublicationDate()
    {
        return $this->publicationDate->format("d/m/Y à H:i");
    }

    public function setPublicationDate($date)
    {
        $this->publicationDate = new \DateTime($date);
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
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
        return $this->getId() . " " . $this->getBody() . " " . $this->getUser() . " " . $this->getImg() . " " . $this->getPublicationDate();
    }
}