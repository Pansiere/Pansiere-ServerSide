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
        require __DIR__ . "/../view/admin.php";
    }

    public function home()
    {
        require __DIR__ . "/../view/home.php";
    }
}
