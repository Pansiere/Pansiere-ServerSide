<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pansiere\ServerSide\Database\Database;

$pdo = Database::createConnection();

$projectName = 'Servidor Proxmox';
$projectDescription = 'Este é um projeto de exemplo GG gogo vamos lá!';

try {
    $pdo->beginTransaction();

    $insertProjectQuery = 'INSERT INTO projects (name, description) VALUES (:name, :description)';
    $stmt = $pdo->prepare($insertProjectQuery);
    $stmt->execute([
        ':name' => $projectName,
        ':description' => $projectDescription
    ]);
    $pdo->commit();

    echo "Projeto e imagens inseridos com sucesso!";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Erro ao inserir dados: " . $e->getMessage();
}

$projectName2 = 'Grafana';
$projectDescription2 = 'Testato e aprovado vamos GG gogo';

try {
    $pdo->beginTransaction();

    $insertProjectQuery = 'INSERT INTO projects (name, description) VALUES (:name, :description)';
    $stmt = $pdo->prepare($insertProjectQuery);
    $stmt->execute([
        ':name' => $projectName2,
        ':description' => $projectDescription2
    ]);
    $pdo->commit();

    echo "Projeto e imagens inseridos com sucesso!";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Erro ao inserir dados: " . $e->getMessage();
}
