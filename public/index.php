<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use Pansiere\ServerSide\Controller\Controller;

$page = rtrim(strtok($_SERVER['REQUEST_URI'], '?'), '/') ?: '/';

$controller = new Controller();

switch ($page) {
    case '/admin':
        $controller->admin();
        break;
    case '/projetos':
        $controller->admin();
        break;
    case '/sobre':
        $controller->admin();
        break;
    default:
        $controller->home();
}

// dd($_SERVER['REQUEST_URI'], $page, $_SERVER);
