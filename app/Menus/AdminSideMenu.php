<?php

namespace App\Menus;

class AdminSideMenu implements IMenu
{

    function getItems(): iterable
    {
        return [
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
}
