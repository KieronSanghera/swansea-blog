<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Factory;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Admin;
        $a -> name ='Sean';
        $a -> user_id = 1;
        $a -> save();
        
        $admins = Admin::factory()->count(10)->create();
    }
}
