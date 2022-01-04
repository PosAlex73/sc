<?php

namespace App\Observers;

use App\Models\AdminNotifications;

class AdminNotificationObserver
{
    /**
     * Handle the AdminNotifications "created" event.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return void
     */
    public function created(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Handle the AdminNotifications "updated" event.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return void
     */
    public function updated(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Handle the AdminNotifications "deleted" event.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return void
     */
    public function deleted(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Handle the AdminNotifications "restored" event.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return void
     */
    public function restored(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Handle the AdminNotifications "force deleted" event.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return void
     */
    public function forceDeleted(AdminNotifications $adminNotifications)
    {
        //
    }
}
