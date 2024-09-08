<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pansiere\ServerSide\Database\Database;

$pdo = Database::createConnection();

$pdo->exec('CREATE TABLE IF NOT EXISTS projects (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT NOT NULL
)');
