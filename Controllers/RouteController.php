<?php
namespace Controllers;
use    model\Manager\RouteManager;
$stuffToDo = [
    1 => "set up user creation",
    2 => "set up admin controls",
    3 => "set up retrieve password via email",
    4 => "set up user profile page?"
];

$adminControls = [
    1 => "password reset",
    2 => "user deletion",
    3 => "course name editing/creation"
];

die(var_dump($stuffToDo, $adminControls));

$router = new RouteManager($twig, $db);

// Register routes
// GENERAL ROUTES
$router->registerRoute('home', ConnectionController::class, 'index');
$router->registerRoute('login', ConnectionController::class, 'connectUser');
$router->registerRoute('createUser', ConnectionController::class, 'create');
$router->registerRoute("logout", ConnectionController::class, "logout");
$router->registerRoute('404', ErrorController::class, 'error404');

// ADMIN ROUTES
$router->registerRoute('adminControls', AdminController::class, 'adminControls');



// Handle request
$route = $_GET['route'] ?? 'home';
$router->handleRequest($route);