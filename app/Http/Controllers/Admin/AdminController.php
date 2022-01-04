<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

abstract class AdminController extends Controller
{
    private const DEFAULT_PAGINATION = 15;

    protected static function getPagination()
    {
        if (empty(config('app.default_pagination'))) {
            return static::DEFAULT_PAGINATION;
        }
    }
}
