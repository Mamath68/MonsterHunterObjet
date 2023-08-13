<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\AuteurManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class VideoController extends AbstractController implements ControllerInterface
{

    public function index()
    {
            return [
                "view" => VIEW_DIR . "home.php",
            ];
    }

    public function findAutorById($id)
    {
        $auteurManager = new AuteurManager();
        return [
            "view" => VIEW_DIR . "yugioh/auteurs/detailAuteur.php",
            "data" => [
                "auteurs" => $auteurManager->findOneById($id),
            ]
        ];

    }
    public function findAuteurById($id)
    {
        $auteurManager = new AuteurManager();
        return [
            "view" => VIEW_DIR . "yugioh/mangas/detailMangas.php",
            "data" => [
                "auteur" => $auteurManager->findOneById($id),
            ]
        ];

    }

}