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
        $s -> email ='Kieron@swan.ac.uk';
        $s -> password ='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $s -> save();

        $students = Student::factory()->count(10)->create();
        //
    }
}
