<?php

namespace Database\Factories;

use App\Enums\ThreadMessageTypes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThreadMessagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = DB::table('users')->select('id')->get();
        $thread_ids = DB::table('threads')->select('id')->get();

        return [
            'message' => Str::random(15),
            'user_id' => $user_ids->random()->id,
            'thread_id' => $thread_ids->random()->id,
            'status' => ThreadMessageTypes::UNREAD
        ];
    }
}
