<?php

namespace Domain\Model;

use stdClass;

class Test
{
    public string $name;
    public string $email;

    private function __construct()
    {
    }

    public static function createInstance(stdClass $item)
    {
        $newInstance = new Test();
        $newInstance->name = $item->name;
        $newInstance->email = $item->email;

        return $newInstance;
    }
}
