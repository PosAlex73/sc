<?php

namespace Database\Seeders;

use App\Models\ThreadMessages;
use Illuminate\Database\Seeder;

class ThreadMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThreadMessages::factory()->count(500)->create();
    }
}
