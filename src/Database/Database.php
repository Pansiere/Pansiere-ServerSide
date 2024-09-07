<?php

namespace Pansiere\ServerSide\Database;

use PDO;

class Database
{
    public static function createConnection(): PDO
    {
        $connection = new PDO('sqlite:' . __DIR__ . '/../../DB/db.sqlite');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
