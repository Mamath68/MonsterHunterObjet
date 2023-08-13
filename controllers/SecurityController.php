<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans dossier APP
use Core\Session;
// fait appel a AbstractController dans dossier APP
use Core\AbstractController;
// fait appel a ControllerInterface dans dossier APP
use Core\ControllerInterface;
// fait appel a UserManager dans sous-dossier Managers du dossier Model
use Models\Managers\UserManager;

// class securityController hérite de la classe AbstractController et implémente ControllerInterface.
class SecurityController extends AbstractController implements ControllerInterface
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
    public function registerForm()
    {
        return [
            "view" => VIEW_DIR . "security/register.php",
            "data" => null,
        ];
    }
    public function register()
    {
        if (!empty($_POST)) {
            $username = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $avatar = filter_input(INPUT_POST, "avatar", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $confirmpassword = filter_input(INPUT_POST, "confirmpassword", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($username && $password && $email) {
                if (($password == $confirmpassword) and strlen($password) >= 3) {
                    $manager = new UserManager();
                    $user = $manager->findOneByPseudo($username);

                    if (!$user) {

                        $hash = password_hash($password, PASSWORD_DEFAULT);

                        if
                        (
                            $manager->add([
                                "pseudo" => $username,
                                "email" => $email,
                                "avatar" => $avatar,
                                "password" => $hash,
                                "role" => json_encode(["ROLE_USER"]),
                            ])
                        ) {
                            return [
                                "view" => VIEW_DIR . "home.php",
                            ];
                        }
                    }
                }
            } else {
                echo "<h1 style='color:red;'>Erreur d'Enregistrement !</h1>";
                return [
                    "view" => VIEW_DIR . "security/register.php",
                ];
            }
        } else {
            echo "<h1 style='color:orange;'>Ces données n'ont pas été soumis !</h1>";
            return [
                "view" => VIEW_DIR . "security/register.php",
            ];
        }
    }
    public function loginForm()
    {
        return [
            "view" => VIEW_DIR . "security/login.php",
            "data" => null,
        ];
    }
    public function login()
    {
        if (!empty($_POST)) {

            $username = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($username && $password) {

                $manager = new UserManager();
                $user = $manager->findOneByPseudo($username);

                $pass = $user->getPassword();

                if ($user) {
                    if (password_verify($password, $pass)) {
                        session::setUser($user);

                        header('Location:index.php?ctrl=security&action=index');
                    } else {
                        return [
                            "view" => VIEW_DIR . "security/login.php",
                            "data" => null,
                        ];
                    }
                }
            }
        }
    }
    public function logout()
    {
        unset($_SESSION['user']);
        header('location: index.php?ctrl=security&action=index');
    }
}