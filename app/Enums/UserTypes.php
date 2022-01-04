<?php

namespace App\Enums;

class UserTypes extends AEnum
{
    public const ADMIN = 1;
    public const MODERATOR = 2;
    public const SIMPLE = 3;

    public static function admins()
    {
        return [
            static::MODERATOR, static::ADMIN
        ];
    }
}
