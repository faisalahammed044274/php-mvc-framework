<?php

namespace App\Base;

use PDO;

class Model
{
    public function __construct()
    {
        $this->connectDb();
    }

    public function connectDb()
    {

        $user = 'root';
        $pass = '';

        try {
            return new \PDO('mysql:host=localhost;dbname=php_mvc', $user, $pass);
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
