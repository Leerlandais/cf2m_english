<?php

namespace model\Manager;
use model\Abstract\AbstractManager;
use model\Mapping\EnglishUserMapping;
use PDO;

class ConnectionManager extends AbstractManager
{
    public function logoutUser() : void
    {
        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    public function attemptLogin(array $loginData) : bool
    {
        $user = $loginData["user_username"];
        $stmt = $this->db->prepare("SELECT * FROM english_users WHERE english_user_username = ?");
        $stmt->bindValue(1, $user);
        $stmt->execute();
        $data = $stmt->fetch();
        if(!$data) return false;
        if(!password_verify($loginData["user_password"], $data["english_user_password"])) return false;

        $userData = new EnglishUserMapping($data);
        $this->createUserSession($userData);
        return true;
    }
    public function createUser(array $userData) : void
    {
        die(var_dump($userData));
    }


    private function createUserSession(EnglishUserMapping $userData) : void
    {
        die(var_dump($userData));
    }
}