<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\CastingManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class GameController extends AbstractController implements ControllerInterface
{

    public function index()
    {
            return [
                "view" => VIEW_DIR . "home.php",
            ];
    }

    

}