<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\AnimeManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class AnimeController extends AbstractController implements ControllerInterface
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
    public function findAllAnime()
    {
        $animeManager = new AnimeManager();

        return [
            "view" => VIEW_DIR . "yugioh/anime/listAnime.php",
            "data" => [
                "animes" => $animeManager->findAll()
            ]
        ];
    }
    public function findAnimeById($id)
    {
        $animeManager = new AnimeManager();
        return [
            "view" => VIEW_DIR . "yugioh/anime/detailAnime.php",
            "data" => [
                "animes" => $animeManager->findOneById($id),
            ]
        ];

    }

}