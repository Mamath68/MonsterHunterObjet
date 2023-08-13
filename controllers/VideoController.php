<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class VideoController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }

    public function findVideoChannel($id)
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuVideo/ContenuVideo.php",
            
        ];

    }

}