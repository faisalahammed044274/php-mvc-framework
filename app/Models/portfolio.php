<?php

namespace App\Models;

use App\Base\Model;

class Portfolio extends Model
{

    protected $tableName = 'portfolios';

    public function get()


    {
        return $this->fetchAll("SELECT * FROM {$this->tableName}");
    }

    public function findById(int $id)
    {
        return $id;
    }
}
