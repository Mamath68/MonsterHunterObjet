<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\PublicationManager;

class WikiController extends AbstractController implements ControllerInterface
{

    public function index()
    {
            return [
                "view" => VIEW_DIR . "home.php",
            ];
    }
    public function findPublicationsByUsers($id)
    {
        $publicationManager = new PublicationManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/publicationByUsers.php",
            "data" => [
                "publications" => $publicationManager->findPublicationsByUser($id, ["id_publication", "ASC"]),
            ]
        ];
    }
   
}