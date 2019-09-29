<?php

use App\User;
use App\UserRule;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory('App\User', 10)->create();
        $roleAdmin = UserRule::firstOrCreate(['name' => 'admin']);
        $roleUser = UserRule::firstOrCreate(['name' => 'user']);
        User::all()->each(function (User $user) use ($faker, $roleAdmin, $roleUser) {

            $user->rules()->attach($faker->boolean ? $roleAdmin : $roleUser);
        });
    }
}
