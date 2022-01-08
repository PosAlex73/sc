<?php

namespace App\Providers;

use App\Composers\SimpleUserComposer;
use App\Composers\StaticDataComposer;
use App\Composers\UserStaticDataComposer;
use App\Enums\TagTypes;
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
        View::composer(['admin.pages.*'], StaticDataComposer::class);
        View::composer('admin.tags.*', TagTypes::class);
        View::composer('admin.threads.*', SimpleUserComposer::class);
        View::composer('admin.users.*', UserStaticDataComposer::class);
    }
}
