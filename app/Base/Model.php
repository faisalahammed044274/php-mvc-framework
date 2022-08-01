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

            $dbHost = env('DB_HOST');
            if (empty($dbHost)) {
                throw new Exception('please provide Database HOST');
            };

            $dbPort = env('DB_PORT');;
            if (empty($dbPort)) {
                throw new Exception('please provide Database PORT');
            };

            $dbName = env('DB_NAME');
            if (empty($dbName)) {
                throw new Exception('please provide Database Name.');
            }

            $dbUser = env('DB_USER');
            if (empty($dbUser)) {
                throw new Exception('please provide Database USERNAME');
            }

            $dbPassword = env('DB_PASSWORD');
            if (empty($dbPassword)) {
                throw new Exception('please provide Database Information');
            }

            return new PDO("mysql:host=$dbHost;dbname=$dbName;port=$dbPort", $dbUser, $dbPassword);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function execute(string $sqlQuery, array $bindParams = []): \PDOStatement
    {
        $pdo = $this->connectDb();
        $stmt = $pdo->prepare($sqlQuery);
        $stmt->execute($bindParams);

        return $stmt;
    }

    public function fetchAll(string $sqlQuery, array $bindParams = [])
    {
        $stmt = $this->execute($sqlQuery, $bindParams);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchObj(string $sqlQuery, array $bindParams = [])
    {
        $stmt = $this->execute($sqlQuery, $bindParams);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
