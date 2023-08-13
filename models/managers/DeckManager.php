<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class DeckManager extends Manager
{

    protected $className = "Models\Entities\Deck";
    protected $tableName = "deck";

    public function __construct()
    {
        parent::connect();
    }

    public function findAllDeck()
    {
        $sql = "SELECT d.id_deck, d.deckName, d.deckPresentation, d.imgDeck, d.deckDate
                FROM " . $this->tableName . " d
                ";

        return $this->getMultipleResults(
            DAO::select($sql),
            $this->className
        );
    }

    public function findOneById($id)
    {
        $sql = "SELECT d.id_deck, d.deckName, d.deckPresentation, d.imgDeck, d.deckDate
                FROM " . $this->tableName . " d
                WHERE d.id_deck = :id
                ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function update($deck){
        $sql = "UPDATE " . $this->tableName . "
                SET
                    deckName = :deckName,
                    deckPresentation = :deckPresentation,
                    imgDeck = :imgDeck,
                    cards = :cards
                WHERE
                    id_deck = :id_deck
                ";

                $params = [
                    'id_deck' => $deck->getId(),
                    'deckName' => $deck->getName(),
                    'deckPresentation' => $deck->getPresentation(),
                    'imgDeck' => $deck->getImgDeck(),
                    'cards' => $deck->getCards()
                ];

        return DAO::update($sql, $params);
    }

}