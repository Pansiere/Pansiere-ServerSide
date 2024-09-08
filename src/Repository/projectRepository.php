<?php

namespace Pansiere\ServerSide\Repository;

use Pansiere\ServerSide\Database\Database;
use Pansiere\ServerSide\Models\Project;


class projectRepository
{
    /** /aprendi isso aq na alura kkk :)
     * @param \PDO $pdo
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::createConnection();
    }

    public function create(Project $project): Project
    {
        return $project;
    }

    public function findProjectById($id)
    {
        $project = $this->pdo->query("");
    }
}
