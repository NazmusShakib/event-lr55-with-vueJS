<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Nazmus Shakib',
            'role_id' => 1,
            'email' => 'nshakib.se@gmail.com',
            'password' => bcrypt('1q1q1q')
        ]);

        \App\User::create([
            'name' => 'Swanigane',
            'role_id' => 1,
            'email' => 'swanigane@yahoo.com',
            'password' => bcrypt('Alarm1996')
        ]);
    }
}
