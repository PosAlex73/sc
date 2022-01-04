<?php

namespace Database\Seeders;

use App\Enums\UserStatuses;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'email_verified_at' => now(),
            'status' => UserStatuses::ACTIVE,
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
        ]);

        User::factory()->count(50)->create();
    }
}
