<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\MovieManager;
use Models\Managers\MangasManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class DeriveController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        
            return [
                "view" => VIEW_DIR . "home.php",
            ];

    }
    public function listDerives()
    {
        $animeManager = new MovieManager();

        return [
            "view" => VIEW_DIR . "MonsterHunter/Derive/Derives.php",
            "data" => [
                "derives" => $animeManager->findAll()
            ]
        ];
    }
    public function findDeriveById($id)
    {
        $animeManager = new MovieManager();
        return [
            "view" => VIEW_DIR . "MonsterHunter/Derive/DetailDerives.php",
            "data" => [
                "derives" => $animeManager->findOneById($id),
            ]
        ];

    }

}