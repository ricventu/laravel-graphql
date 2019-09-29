<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::firstOrCreate(['name' => 'admin']);
        UserRole::firstOrCreate(['name' => 'user']);
    }
}
