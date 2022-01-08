<?php

namespace App\Composers;

use App\Enums\UserStatuses;
use App\Enums\UserTypes;
use Illuminate\Contracts\View\View;

class UserStaticDataComposer implements ICustomComposer
{
    public function compose(View $view)
    {
        $view->with('statuses', UserStatuses::getAll());
        $view->with('types', UserTypes::getAll());

        return $view;
    }
}
