<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pansiere\ServerSide\Database\Database;

$pdo = Database::createConnection();

$projectName = 'Meu Projeto';
$projectDescription = 'Este é um projeto de exemplo';
$projectImages = ['image1.jpg', 'image2.jpg', 'image3.jpg'];
$projectId = $pdo->lastInsertId();

$pdo->exec("INSERT INTO projects (name, description) VALUES ($projectName, $projectDescription)");

foreach ($projectImages as $image) {
    $pdo->exec("INSERT INTO project_images (project_id, image)
    VALUES ($project_id, $image)");
}

dd($projectImages);
