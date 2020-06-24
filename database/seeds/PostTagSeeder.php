<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Tag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach(Post::all() as $post) {
            $tag_ids = [];
            foreach (Tag::all() as $tag) {
                $faker->boolean(30) && $tag_ids[] = $tag->id;
            }
            $post->tags()->attach($tag_ids);
        }
    }
}
