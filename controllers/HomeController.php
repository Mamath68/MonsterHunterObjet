<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans le namespace Core
use Core\Session;
// fait appel a AbstractController dans le namespace Core
use Core\AbstractController;
// fait appel a ControllerInterface dans le namespace Core
use Core\ControllerInterface;
// fait appel a UserManager dans le namespace Models\Managers
use Models\Managers\UserManager;
use Models\Managers\PublicationManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class HomeController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",

        ];

    }

    public function about()
    {

        return [
            "view" => VIEW_DIR . "home/A_Propos.php"
        ];
    }
    // public function users()
    // {
    //     $userManager = new UserManager();

    //     return [

    //         "view" => VIEW_DIR . "security/listUsers.php",

    //         "data" => [
    //             "users" => $userManager->findAll(["role", "DESC"])

    //         ]
    //     ];
    // }
    // public function detailUser($id)
    // {

    //     $userManager = new UserManager();
    //     // $publicationManager = new PublicationManager();


    //     return [
    //         "view" => VIEW_DIR . "security/detailUser.php",
    //         "data" => [
    //             "user" => $userManager->findOneById($id),
    //         ]
    //     ];
    // }

}