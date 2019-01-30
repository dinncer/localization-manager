<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run user database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['email' => 'administrator@test.com',
            'password' => '123456',
            'name' => 'Administrator',
            'role' => '1',
        ]);
    }
}
