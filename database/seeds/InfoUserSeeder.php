<?php

use Illuminate\Database\Seeder;
use App\InfoUser;
use App\User;
use Faker\Generator as Faker;

class InfoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach($users as $user) {
            $newInfo = new InfoUser();
            $newInfo->user_id  = $user->id;
            $newInfo->address = $faker->streetAddress();
            $newInfo->phone = $faker->phoneNumber();
            $newInfo->avatar = $faker->imageUrl();
            $newInfo->save();
        }
    }
}
