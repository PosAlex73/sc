<?php

namespace App\Enums;

use ReflectionClass;

class AEnum
{
    public static function getAll() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
