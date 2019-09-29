<?php

use App\UserRule;
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
        UserRule::firstOrCreate(['name' => 'admin']);
        UserRule::firstOrCreate(['name' => 'user']);
    }
}
