<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\CastingManager;


class GameController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }

    public function findAllGames()
    {

        return [
            "view" => VIEW_DIR . "MonsterHunter/Jeux/ListeJeux.php",
        ];
    }

}