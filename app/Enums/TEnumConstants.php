<?php

namespace App\Enums;

use ReflectionClass;

trait TEnumConstants
{
    public static function getAll() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
