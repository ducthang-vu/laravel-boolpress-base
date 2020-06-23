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
        for($i = 0; $i < 100; $i++) {
            $newComment= new Comment();
            $newComment->user_id = User::all()->random()->id;
            $newComment->post_id = Post::all()->random()->id;
            $newComment->body = $faker->text(300);
            $newComment->save();
        }
    }
}
