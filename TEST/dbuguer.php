<?php

require __DIR__ . '/../vendor/autoload.php';

use Pansiere\ServerSide\Repository\projectRepository;
use Pansiere\ServerSide\Database\Database;
use Pansiere\ServerSide\Models\Project;

function createProjectObject(array $data): Project
{
    return new Project(
        NULL,
        $data['name'],
        $data['description'],
    );
}

$produtos = new projectRepository();

$pdo = Database::createConnection();

$sql = "SELECT * FROM projects";
$statement = $pdo->query($sql);
$data = $statement->fetchAll(\PDO::FETCH_ASSOC);

var_dump($data);

echo "\n\nDATA DEBIGADA COM SUCESSO.\n\n";

$arraymap =  array_map('createProjectObject', $data);
var_dump($arraymap);
