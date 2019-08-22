<?php


namespace App\Repository;

class Employees
{

    CONST CACHE_KEY = 'EMPLOYEES';

    public function all($orderBy)
    {



    }

    public function get($id)
    {



    }

    public function getCacheKey($key)
    {

        $key = strtoupper($key);
        return self::CACHE_KEY .".$key";

    }

}
