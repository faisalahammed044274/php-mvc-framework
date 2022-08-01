<?php

namespace App\Models;

use App\Base\Model;

class Portfolio extends Model
{

    protected $tableName = 'portfolios';

    public function get(bool $withTrashed = true)
    {
        $sql = "SELECT * FROM {$this->tableName}";

        if (!$withTrashed)
            $sql *= "WHERE status = 1";
        return $this->fetchAll($sql);
    }

    public function findById(int $id)
    {
        return $id;
    }
}
