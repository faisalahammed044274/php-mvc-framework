<?php

namespace App\Base;

use Exception;
use PDO;

class Model
{
    public function __construct()
    {
        $this->connectDb();
    }

    public function connectDb()
    {

        try {

            $dbHost = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '';
            if (empty($dbHost)) {
                throw new Exception('please provide Database HOST');
            };

            $dbPort = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '';
            if (empty($dbPort)) {
                throw new Exception('please provide Database PORT');
            };

            $dbName = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : '';
            if (empty($dbName)) {
                throw new Exception('please provide Database Name.');
            }

            $dbUser = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : '';
            if (empty($dbUser)) {
                throw new Exception('please provide Database USERNAME');
            }

            $dbPassword = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : '';
            if (empty($dbPassword)) {
                throw new Exception('please provide Database Information');
            }

            $dbName = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : '';
            if (empty($dbName)) {
                throw new Exception('please provide Database Information');
            }

            return new \PDO("mysql:host=$dbHost;dbname=$dbName;port=$dbPort", $dbUser, $dbPassword);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function execute(string $sqlQuery)
    {
        $stmt = $this->connectDb()->query($sqlQuery);
        $stmt->execute();

        return $stmt;
    }

    public function fetchAll(string $sqlQuery)
    {
        $stmt = $this->execute($sqlQuery);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchObj(string $sqlQuery): mixed
    {
        $stmt = $this->execute($sqlQuery);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
