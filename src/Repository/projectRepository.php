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

    private function createProjectObject(array $data): Project
    {
        return new Project(
            $data['name'],
            $data['description'],
        );
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM projects";
        $statement = $this->pdo->query($sql);
        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return array_map([$this, 'createProjectObject'], $data);
    }
}
