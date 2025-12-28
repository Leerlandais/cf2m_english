<?php
namespace Controllers;
use    model\Manager\RouteManager;


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