<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EntrustRelatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert([
       		[
        		'name' => 'owner',
        		'display_name' => 'Project Owner',
        		'description' => 'User is the owner of a given project'
        	],
        	[
        		'name' => 'admin',
        		'display_name' => 'User Administrator',
        		'description' => 'User is allowed to manage and edit other users'
        	],
        	[
        		'name' => 'support',
        		'display_name' => 'Support User',
        		'description' => 'Support user is allowed to manage the tickets'
        	],
        	[
        		'name' => 'customer',
        		'display_name' => 'Customer',
        		'description' => 'A Customers'
        	]
        ]);


		/**
		* Create permissions
		*/
        DB::table('permissions')->insert([
            [
                'name' => 'owner',
                'display_name' => 'The owner',
                'description' => 'The owner',
            ],
            [
                'name' => 'admin',
                'display_name' => 'He is an admin',
                'description' => 'He is an admin',
            ],
            [
                'name' => 'support',
                'display_name' => 'Support representative',
                'description' => 'Support representative',
            ],
            [
                'name' => 'customer',
                'display_name' => 'Customer User',
                'description' => 'Customer',
            ]
        ]);


        DB::table('permission_role')->insert([
                [
                    'permission_id' => DB::table('permissions')->where('name', 'owner')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'owner')->first()->id
                ],
                [
                    'permission_id' => DB::table('permissions')->where('name', 'admin')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'admin')->first()->id
                ],
                [
                    'permission_id' => DB::table('permissions')->where('name', 'support')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'support')->first()->id
                ],
                [
                    'permission_id' => DB::table('permissions')->where('name', 'customer')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'customer')->first()->id
                ]
            ]
        );



        DB::table('role_user')->insert([
                [
                    'user_id' => DB::table('users')->where('email', 'owner@example.com')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'owner')->first()->id
                ],
                [
                    'user_id' => DB::table('users')->where('email', 'admin@example.com')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'admin')->first()->id
                ],
                [
                    'user_id' => DB::table('users')->where('email', 'support@example.com')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'support')->first()->id
                ],
                [
                    'user_id' => DB::table('users')->where('email', 'customer@example.com')->first()->id,
                    'role_id' => DB::table('roles')->where('name', 'customer')->first()->id
                ]
            ]);
    }
}
