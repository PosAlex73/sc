<?php

namespace App\Enums;

class PageTypes extends CommonStatuses
{
    use TEnumConstants;

    public const WAITING = 3;
    public const HIDDEN = 4;
}
