<?php

namespace App\Enums;

class AdminNotificationTypes extends AEnum
{
    use TEnumConstants;

    public const COMMON = 1;
    public const USERS = 2;
}
