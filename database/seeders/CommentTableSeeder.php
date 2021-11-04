<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment;
        $c -> post_id=1;
        $c -> student_id=1;
        $c -> body='First comment';
        $c ->save();
        //
    }
}
