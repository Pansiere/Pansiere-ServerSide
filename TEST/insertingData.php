<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pansiere\ServerSide\Database\Database;

$pdo = Database::createConnection();

$projectName = 'Meu Projeto';
$projectDescription = 'Este é um projeto de exemplo';
$projectImages = ['image1.jpg', 'image2.jpg', 'image3.jpg'];

try {
    $pdo->beginTransaction();

    $insertProjectQuery = 'INSERT INTO projects (name, description) VALUES (:name, :description)';
    $stmt = $pdo->prepare($insertProjectQuery);
    $stmt->execute([
        ':name' => $projectName,
        ':description' => $projectDescription
    ]);

    $projectId = $pdo->lastInsertId();

    $insertImageQuery = 'INSERT INTO project_images (project_id, image) VALUES (:project_id, :image)';
    $stmt = $pdo->prepare($insertImageQuery);

    foreach ($projectImages as $image) {
        $stmt->execute([
            ':project_id' => $projectId,
            ':image' => $image
        ]);
    }

    $pdo->commit();

    echo "Projeto e imagens inseridos com sucesso!";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Erro ao inserir dados: " . $e->getMessage();
}
