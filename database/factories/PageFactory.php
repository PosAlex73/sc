<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\PageTypes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $page_statuses = CommonStatuses::getAll();
        $page_types = PageTypes::getAll();

        return [
            'title' => Str::random(10),
            'text' => Str::random(100),
            'status' => $page_statuses[array_rand($page_statuses)],
            'type' => $page_types[array_rand($page_statuses)]
        ];
    }
}
