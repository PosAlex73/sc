<?php

namespace App\Observers;

use App\Models\UserProfile;

class UserProfileObserver
{
    /**
     * Handle the UserProfile "created" event.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return void
     */
    public function created(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the UserProfile "updated" event.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return void
     */
    public function updated(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the UserProfile "deleted" event.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return void
     */
    public function deleted(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the UserProfile "restored" event.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return void
     */
    public function restored(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the UserProfile "force deleted" event.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return void
     */
    public function forceDeleted(UserProfile $userProfile)
    {
        //
    }
}
