<?php

namespace App\Menus;

use Illuminate\View\View;

interface IMenu
{
    function getItems(): iterable;

    function compose(View $view);
}
