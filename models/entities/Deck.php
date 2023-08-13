<?php

namespace Models\Entities;

use Core\Entity;

final class Deck extends Entity
{

    private $id;
    private $userId;
    private $deckName;
    private $cards;
    private $deckPresentation;
    private $imgDeck;
    private \DateTime $deckDate;

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

    public function getDeckName()
    {
        return $this->deckName;
    }

    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;
    }

    public function getDeckDate()
    {
        return $this->deckDate->format("d/m/Y à H:i");
    }

    public function setDeckDate($deckDate)
    {
        $this->deckDate = new \DateTime($deckDate);
        return $this;
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function setCards($cards)
    {
        $this->cards = $cards;
    }

    public function getDeckPresentation()
    {
        return $this->deckPresentation;
    }

    public function setDeckPresentation($deckPresentation)
    {
        $this->deckPresentation = $deckPresentation;
    }

    public function getImgDeck()
    {
        return $this->imgDeck;
    }

    public function setImgDeck($imgDeck)
    {
        $this->imgDeck = $imgDeck;
    }
    public function __toString()
    {
        return $this->getId() . " " . $this->getDeckName() . " " . $this->getDeckPresentation() . $this->getImgDeck() . " " . $this->getCards() . " " . $this->getDeckDate();
    }
}