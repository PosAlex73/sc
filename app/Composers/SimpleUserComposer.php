<?php

namespace App\Composers;

use App\Enums\UserTypes;
use App\Models\User;
use Illuminate\Contracts\View\View;

class SimpleUserComposer implements ICustomComposer
{
    public function compose(View $view)
    {
        $view->with('users', User::where('type', UserTypes::SIMPLE)->get());

        return $view;
    }
}
