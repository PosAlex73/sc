<?php

namespace Database\Factories;

use App\Enums\AdminNotificationTypes;
use App\Enums\ThreadMessageTypes;
use App\Enums\UserStatuses;
use App\Enums\UserTypes;
use App\Models\AdminNotifications;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminNotificationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = User::where('type', '<>', UserTypes::SIMPLE)->get('id')->toArray();
        $user_ids = array_column($user_ids, 'id');
        $thread_statuses = ThreadMessageTypes::getAll();
        $thread_types = AdminNotificationTypes::getAll();

        return [
            'title' => Str::random(15),
            'message' => Str::random(50),
            'user_id' => $user_ids[array_rand($user_ids, 1)],
            'status' => $thread_statuses[array_rand($thread_statuses, 1)],
            'type' => $thread_types[array_rand(AdminNotificationTypes::getAll(), 1)],
        ];
    }
}
