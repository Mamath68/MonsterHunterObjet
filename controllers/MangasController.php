<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\MangasManager;

// use Models\Managers\AuteurManager;


class MangasController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        $cardsEndpoint = "https://db.ygoprodeck.com/api/v7/cardinfo.php";

        // Send GET request to the API
        $cardsResponse = file_get_contents($cardsEndpoint);

        // Handle the response

        if ($cardsResponse) {

            // Convert JSON response to PHP array
            $cardsArray = json_decode($cardsResponse, true);

            // Get the total number of available cards
            $totalCards = count($cardsArray['data']);

            // Generate a random index to select a card
            $randomIndex = array_rand($cardsArray['data']);

            // Retrieve the randomly selected card using the random index
            $randomCard = $cardsArray['data'][$randomIndex];

            return [
                "view" => VIEW_DIR . "home.php",
                "data" => [
                    "card" => $randomCard,
                    // var_dump($randomCard),
                ]
            ];

        } else {

            // Handle error if request fails

            echo "API request failed.";

        }
    }
    public function findAllMangas()
    {
        $mangasManager = new MangasManager();

        return [
            "view" => VIEW_DIR . "yugioh/mangas/listMangas.php",
            "data" => [
                "mangas" => $mangasManager->findAll()
            ]
        ];
    }
    public function findMangasById($id)
    {
        $mangasManager = new MangasManager();
        return [
            "view" => VIEW_DIR . "yugioh/mangas/detailMangas.php",
            "data" => [
                "mangas" => $mangasManager->findOneById($id),
            ]
        ];

    }

}