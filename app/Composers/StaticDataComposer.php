<?php

namespace App\Composers;

use App\Enums\CommonStatuses;
use App\Enums\PageTypes;
use Illuminate\View\View;

class StaticDataComposer
{
    public function compose(View $view)
    {
        $view->with([
            'statuses' => CommonStatuses::getAll(),
            'page_types' => PageTypes::getAll()
        ]);

        return $view;
    }
}
