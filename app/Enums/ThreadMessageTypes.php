<?php

namespace App\Enums;

class ThreadMessageTypes extends CommonStatuses
{
    use TEnumConstants;

    public const UNREAD = 3;
    public const READ = 4;
}
