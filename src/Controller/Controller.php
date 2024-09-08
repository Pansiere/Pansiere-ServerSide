<?php

namespace Pansiere\ServerSide\Controller;

use Pansiere\ServerSide\Database\Database;

class Controller
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::createConnection();
    }

    public function admin()
    {
        require __DIR__ . "/../view/home.php";
    }

    public function sobre()
    {
        require __DIR__ . "/../view/home.php";
    }

    public function contato()
    {
        require __DIR__ . "/../view/home.php";
    }

    public function projetos()
    {
        require __DIR__ . "/../view/home.php";
    }

    public function home()
    {
        require __DIR__ . "/../view/home.php";
    }
}
