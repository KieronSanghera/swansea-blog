<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Student;
        $s -> name ='Kieron';
        $s -> user_id=2;
        $s -> save();

        $students = Student::factory()->count(10)->create();
        //
    }
}
