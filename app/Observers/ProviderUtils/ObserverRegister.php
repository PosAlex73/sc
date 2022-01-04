<?php

namespace App\Observers\ProviderUtils;

use App\Models\AdminNotifications;
use App\Models\Group;
use App\Models\Page;
use App\Models\User;
use App\Models\UserNotification;
use App\Models\UserProfile;
use App\Observers\AdminNotificationObserver;
use App\Observers\GroupObserver;
use App\Observers\PageObserver;
use App\Observers\UserNotificationObserver;
use App\Observers\UserObserver;
use App\Observers\UserProfileObserver;

class ObserverRegister
{
    /**
     * @return void
     */
    public static function registerObservers()
    {
        User::observe(UserObserver::class);
        Group::observe(GroupObserver::class);
        Page::observe(PageObserver::class);
        UserNotification::observe(UserNotificationObserver::class);
        UserProfile::observe(UserProfileObserver::class);
        AdminNotifications::observe(AdminNotificationObserver::class);
    }
}
