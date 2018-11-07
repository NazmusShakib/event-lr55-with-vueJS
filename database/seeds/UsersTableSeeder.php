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
        $faker = Faker\Factory::create();


        User::updateOrCreate([
            'email' => 'owner@example.com'
        ], [
            'name' => 'Owner User',
            'first_name' => 'Owner',
            'last_name' => 'Name',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('123456'),

        ]);
        
        User::updateOrCreate([
            'email' => 'admin@example.com'
        ], [
            'name' => 'Admin User',
            'first_name' => 'Example',
            'last_name' => 'admin-name',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('123456'),

        ]);

        User::updateOrCreate([
                'email' => 'support@example.com',
            ], [
                'name' => 'Support User',
                'first_name' => 'Support',
                'last_name' => 'User',
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('123456'),
            ]);

        User::updateOrCreate([
                'email' => 'customer@example.com',
            ], [
                'name' => 'Customer User',
                'first_name' => 'Customer',
                'last_name' => 'User',
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('123456'),
            ]);
    }
}
