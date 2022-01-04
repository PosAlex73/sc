<?php

namespace App\Menus;

use Illuminate\View\View;

class AdminSideMenu implements IMenu
{

    function getItems(): iterable
    {
        return [
            'dashboard' => [
                'link' => 'admin_dashboard',
                'name' => __('amenu.dashboard')
            ],
            'notifications' => [
                'link' => 'admin_notifications.index',
                'name' => __('amenu.admin_notifications')
            ],
            'groups' => [
                'link' => 'groups.index',
                'name' => __('amenu.groups'),
            ],
            'pages' => [
                'link' => 'pages.index',
                'name' => __('amenu.pages'),
            ],
            'tags' => [
                'link' => 'tags.index',
                'name' => __('amenu.tags')
            ],
            'threads' => [
                'link' => 'threads.index',
                'name' => __('amenu.threads')
            ],
            'users' => [
                'link' => 'users.index',
                'name' => __('amenu.users')
            ]
        ];
    }

    public function compose(View $view)
    {
        return $view->with('menu', static::getItems());
    }
}
