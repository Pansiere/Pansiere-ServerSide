<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use Pansiere\ServerSide\Controller\Controller;

$page = rtrim(strtok($_SERVER['REQUEST_URI'], '?'), '/') ?: '/';

$controller = new Controller();

switch ($page) {
    case '/projetos':
        $controller->projetos();
        break;

    case '/sobre':
        $controller->sobre();
        break;

    case '/contato':
        $controller->contato();
        break;

    default:
        $controller->home();
}
