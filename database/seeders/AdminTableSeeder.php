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
        $a -> email ='Sean@swan.ac.uk';
        $a -> password ='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $a -> save();
        
        $admins = Admin::factory()->count(10)->create();
    }
}
