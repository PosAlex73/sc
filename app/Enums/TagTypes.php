<?php

namespace App\Enums;

class TagTypes extends AEnum
{
    use TEnumConstants;

    public const COMMON = 1;

    public function compose()
    {
        return static::getAll();
    }
}
