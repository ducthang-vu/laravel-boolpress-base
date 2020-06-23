<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
use App\Post;
use App\User;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newPost = new Comment();
            $newPost->user_id = User::all()->random()->id;
            $newPost->post_id = Post::all()->random()->id;
            $newPost->body = $faker->text(300);
            $newPost->save();
        }
    }
}
