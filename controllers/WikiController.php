<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;

class WikiController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }
    public function findOfficielContent()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }

}