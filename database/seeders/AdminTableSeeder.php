<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        $a -> position ='Lecturer';
        $a -> save();
        //
    }
}
