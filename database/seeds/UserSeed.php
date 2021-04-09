<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@wptcontracts.com',
            'password' => bcrypt('welcome123#@')
        ]);
        $user->assignRole('administrator');

    }
}
