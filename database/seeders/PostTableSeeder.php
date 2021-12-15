<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p -> admin_id=1;
        $p -> title='First Post';
        $p -> body='This is the body.';
        $p ->save();

        #$posts = Post::factory()->count(10)->create();
    }
}
