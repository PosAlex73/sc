<?php

namespace App\Enums;

use ReflectionClass;

class UserTypes
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

    public static function getAll() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
