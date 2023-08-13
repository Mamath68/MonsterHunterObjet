<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\MovieManager;
use Models\Managers\MangasManager;

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
        $movieManager = new MovieManager();
        $mangasManager = new MangasManager();

        return [
            "view" => VIEW_DIR . "MonsterHunter/Derives/Derives.php",
            "data" => [
                "derives" => $movieManager->findAll(),
                "derive" => $mangasManager->findAll()
            ]
        ];
    }
    public function findDeriveById($id)
    {
        $movieManager = new MovieManager();
        $mangasManager = new MangasManager();
        return [
            "view" => VIEW_DIR . "MonsterHunter/Derives/DetailDerives.php",
            "data" => [
                "derives" => $movieManager->findOneById($id),
            ]
        ];

    }
    public function findDerivesById($id)
    {
        $mangasManager = new MangasManager();
        return [
            "view" => VIEW_DIR . "MonsterHunter/Derives/DetailsDerive.php",
            "data" => [
                "derive" => $mangasManager->findOneById($id),
            ]
        ];

    }

}