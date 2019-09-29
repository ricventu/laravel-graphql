<?php

use App\User;
use App\UserRole;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;


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
        $roleAdmin = UserRole::firstOrCreate(['name' => 'admin']);
        $roleUser = UserRole::firstOrCreate(['name' => 'user']);
        User::all()->each(function (User $user) use ($faker, $roleAdmin, $roleUser) {

            $user->roles()->attach($faker->boolean ? $roleAdmin : $roleUser);
        });
    }
}
