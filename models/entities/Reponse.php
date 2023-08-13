<?php

namespace Models\Entities;

use Core\Entity;

final class Reponse extends Entity
{

    private $id;
    private $userId;
    private $commentId;
    private $body;
    private $img;
    private \DateTime $reponseDate;

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

    public function getCommentId()
    {
        return $this->commentId;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getReponseDate()
    {
        return $this->reponseDate->format("d/m/Y à H:i");
    }

    public function setReponseDate($date)
    {
        $this->reponseDate = new \DateTime($date);
        return $this;
    }

    public function __toString()
    {
        return $this->getId() . $this->getUserId() . " " . $this->getCommentId() . " " . $this->getBody() . " " . $this->getImg() . " " . $this->getReponseDate();
    }


}