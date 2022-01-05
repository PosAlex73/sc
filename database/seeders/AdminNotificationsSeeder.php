<?php

namespace Database\Seeders;

use App\Models\AdminNotifications;
use Illuminate\Database\Seeder;

class AdminNotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminNotifications::factory()->count(100)->create();
    }
}
