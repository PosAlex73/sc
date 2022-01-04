<?php

namespace App\Menus;

interface IMenu
{
    function getItems(): iterable;
}
