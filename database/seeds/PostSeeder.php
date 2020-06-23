<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 25; $i++) {
            $newPost = new Post();
            $newPost->user_id =  User::all()->random()->id;
            $newPost->title = $faker->text(50);
            $newPost->body = $faker->text(4500);
            $newPost->save();
        }
    }
}
