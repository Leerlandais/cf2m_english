<?php

namespace Controllers;


use Factory\ManagerFactory;
use model\Manager\ConnectionManager;
use Twig\Environment;


class ConnectionController extends Abstract\AbstractController
{
    private ConnectionManager $connectionManager;

    public function __construct(Environment $twig, ManagerFactory $managerFactory)
    {
        /*
         * Instantiates Managers needed for this Controller
         * Avoids instantiation of unneeded Managers
         */
        parent::__construct($twig, $managerFactory);
        $this->connectionManager = $this->getManager(ConnectionManager::class);
    }
    public function logout()
    {
        $this->connectionManager->logoutUser();
        header("Location: ./");
        exit;
    }

    public function index() : void
    {
        echo $this->twig->render('public/public.index.html.twig');
    }

    public function create($getParams) : void
    {
        global $sessionRole, $systemMessage;
        if(isset($_POST["unset:createNewUser"])) {
            if($this->checkPasswordMatch($_POST)) {
                $_SESSION["systemMessage"] = "Passwords do not match. Please try again.";
                header("Location: ?route=createUser");
            }
            else {
                die("OK");
            }
        }
        echo $this->twig->render('public/public.createUser.html.twig', [
            "systemMessage" => $systemMessage,
            "sessionRole" => $sessionRole,
            "csrfToken" => $this->csrfToken,
        ]);
    }

    private function checkPasswordMatch(array $postDetails) : bool
    {
        if(!isset($postDetails["pass:user_password"]) || !isset($postDetails["unset:user_password"])) return false;
        if($postDetails["pass:user_password"] !== $postDetails["unset:user_password"]) return false;
        return true;
    }
}