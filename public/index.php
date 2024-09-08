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

    case '/sobre':
        $controller->sobre();
        break;

    case '/contato':
        $controller->contato();
        break;

    case '/projetos':
        $controller->projetos();
        break;

    default:
        $controller->home();
}
