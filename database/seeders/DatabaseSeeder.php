<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()
            ->has(\App\Models\Post::factory()->count(3))
                ->create();
        \App\Models\Student::factory()
            ->has(\App\Models\Comment::factory()->count(3))
            ->create();
    }
}
