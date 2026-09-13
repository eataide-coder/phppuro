<?php

namespace App\Database;
use PDO;

class Connection
{
    private static $instance = null;
    private $connection;

    private function connect()
    {
        return new PDO('mysql:host=localhost;dbname=laravel', 'root', '',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}