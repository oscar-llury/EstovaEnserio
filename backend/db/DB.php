<?php

namespace Enserio\db;

use Nette\Database\Connection;
use Nette\Database\Structure;
use Nette\Database\Context;
use Nette\Caching\Storages\MemoryStorage;

class DB
{
    public $context;

    public function __construct($config_file = null)
    {
        if (is_null($config_file)) {
            $ini = parse_ini_file("database.ini", false);
        } else {
            $ini = parse_ini_file($config_file, false);
        }
        $connection = new Connection(sprintf('%s:dbname=%s;host=%s', $ini['DBConn'], $ini['DBName'], $ini['DBServ']), $ini['DBUser'], $ini['DBPass']);
        $cacheMemoryStorage = new MemoryStorage;
        $structure = new Structure($connection, $cacheMemoryStorage);
        $this->context = new Context($connection, $structure);
    }
}
