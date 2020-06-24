<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
            $title = $faker->text(50);

            $newPost = new Post();
            $newPost->user_id =  User::all()->random()->id;
            $newPost->title = $title;
            $newPost->body = $faker->text(4500);
            $newPost->slug = Str::slug($title, '-');
            $newPost->save();
        }
    }
}
