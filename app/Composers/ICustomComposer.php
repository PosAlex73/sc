<?php

namespace App\Composers;

use Illuminate\Contracts\View\View;

interface ICustomComposer
{
    function compose(View $view);
}
