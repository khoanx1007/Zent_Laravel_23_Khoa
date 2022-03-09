<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $posts=[
            [
                'title'=>'Bai viet 1',
                'slug'=>'bai-viet-1',
                'content'=>'Content Example',
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'status' => 1
            ],
            [
                'title'=>'Bai viet 2',
                'slug'=>'bai-viet-2',
                'content'=>'Content Example',
                'user_created_id' => 2,
                'user_updated_id' => 2,
                'status' => 1
            ]
            ];
        foreach($posts as $post)
        {
            DB::table('posts')->insert($post);
        }
    }
}
