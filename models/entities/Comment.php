<?php

namespace Models\Entities;

use Core\Entity;

final class Comment extends Entity
{

    private $id;
    private $userId;
    private $publicationId;
    private $body;
    private $image;
    private \DateTime $commentDate;

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

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getPublicationId()
    {
        return $this->publicationId;
    }

    public function setPublicationId($publicationId)
    {
        $this->publicationId = $publicationId;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getCommentDate()
    {
        return $this->commentDate->format("d/m/Y à H:i");
    }

    public function setCommentDate($date)
    {
        $this->commentDate = new \DateTime($date);
        return $this;
    }

    public function __toString()
    {
        return $this->getId() . $this->getUserId() . " " . $this->getPublicationId() . " " . $this->getBody() . " " . $this->getImage() . " " . $this->getCommentDate();
    }


}