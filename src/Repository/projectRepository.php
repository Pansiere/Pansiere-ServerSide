<?php

namespace Pansiere\ServerSide\Repository;

use Pansiere\ServerSide\Database\Database;

class projectRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::createConnection();
    }
}
