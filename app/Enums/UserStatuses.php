<?php

namespace App\Enums;

class UserStatuses extends CommonStatuses
{
    use TEnumConstants;

    public const DISABLED = 3;
    public const BANNED = 4;
}
