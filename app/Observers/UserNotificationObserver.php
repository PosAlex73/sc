<?php

namespace App\Observers;

use App\Models\UserNotification;

class UserNotificationObserver
{
    /**
     * Handle the UserNotification "created" event.
     *
     * @param  \App\Models\UserNotification  $userNotification
     * @return void
     */
    public function created(UserNotification $userNotification)
    {
        //
    }

    /**
     * Handle the UserNotification "updated" event.
     *
     * @param  \App\Models\UserNotification  $userNotification
     * @return void
     */
    public function updated(UserNotification $userNotification)
    {
        //
    }

    /**
     * Handle the UserNotification "deleted" event.
     *
     * @param  \App\Models\UserNotification  $userNotification
     * @return void
     */
    public function deleted(UserNotification $userNotification)
    {
        //
    }

    /**
     * Handle the UserNotification "restored" event.
     *
     * @param  \App\Models\UserNotification  $userNotification
     * @return void
     */
    public function restored(UserNotification $userNotification)
    {
        //
    }

    /**
     * Handle the UserNotification "force deleted" event.
     *
     * @param  \App\Models\UserNotification  $userNotification
     * @return void
     */
    public function forceDeleted(UserNotification $userNotification)
    {
        //
    }
}
