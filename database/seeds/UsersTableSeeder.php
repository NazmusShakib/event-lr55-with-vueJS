<?php

use App\User;
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
        User::updateOrCreate([
            'email' => 'admin@example.com'
        ], [
            'name' => 'Example User',
            'first_name' => 'Example',
            'last_name' => 'User-name',
            'phone' => '+74-9 (584)288',
            'password' => bcrypt('123456'),

        ]);

        User::updateOrCreate([
                'email' => 'nshakib.se@gmail.com',
            ], [
                'name' => 'Nazmus Shakib',
                'first_name' => 'Nazmus',
                'last_name' => 'Shakib',
                'phone' => '+88 01737 122 789',
                'password' => bcrypt('1q1q1q'),
            ]);
    }
}
