<?php

namespace App\Providers;

use App\Composers\StaticDataComposer;
use App\Menus\AdminSideMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('static.admin_side', AdminSideMenu::class);
        View::composer([
            'admin.pages.create', 'admin.pages.edit'
        ], StaticDataComposer::class);
    }
}
