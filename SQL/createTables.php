<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pansiere\ServerSide\Database\Database;

$pdo = Database::createConnection();
