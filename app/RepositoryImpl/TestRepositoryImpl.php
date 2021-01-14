<?php

namespace App\RepositoryImpl;

use Domain\Repository\TestRepository;
use Domain\Model\Test;
use DB;

class TestRepositoryImpl implements TestRepository
{
    public function getTest(): ?array
    {
        //ToDo
        $query = DB::table('test');
        $query->select('name', 'email');

        return $query->get()->map(function ($item) {
            return Test::createInstance($item);
        })->toArray();
    }
}
