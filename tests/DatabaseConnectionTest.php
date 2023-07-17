<?php

use PHPUnit\Framework\TestCase;

require_once 'vendor/autoload.php';

class DatabaseConnectionTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $hostname = 'localhost';
        $username = 'root';
        $password = 'root';
        $database = 'to_do_list';

        $connect = new mysqli($hostname, $username, $password, $database);

        $this->assertTrue($connect->connect_errno === 0, 'Echec de la connexion à la base de donnée');
    }
}
