<?php

namespace Controllers;

use Controllers\Abstract\AbstractController;

class AdminController extends Abstract\AbstractController
{
    public function adminControls() : void
    {
        global $sessionRole, $systemMessage;
       // $this->checkPermissions("ROLE_ADMIN", $sessionRole);

        echo $this->twig->render('private/private.adminControls.html.twig', [
            "systemMessage" => $systemMessage,
            "sessionRole" => $sessionRole,
            "csrfToken" => $this->csrfToken,
        ]);
    }
    public function editCourses() : void
    {
        global $sessionRole, $systemMessage;
        $this->checkPermissions("ROLE_ADMIN", $sessionRole);

        echo $this->twig->render('private/private.editCourses.html.twig', [
            "systemMessage" => $systemMessage,
            "sessionRole" => $sessionRole,
            "csrfToken" => $this->csrfToken,
        ]);
    }
}