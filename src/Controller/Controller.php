<?php

namespace Pansiere\ServerSide\Controller;

use Pansiere\ServerSide\Repository\projectRepository;

class Controller
{
    private $projectReposotiry;

    public function __construct()
    {
        $this->projectReposotiry = new projectRepository();
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
        require __DIR__ . "/../view/projetos.php";
    }

    public function home()
    {
        require __DIR__ . "/../view/home.php";
    }
}
