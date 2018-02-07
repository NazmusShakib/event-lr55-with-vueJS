<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->delete();

        Role::create([
            'id' => 1,
            'name' => 'Admin',
            'description' => 'An Admin'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'Admin-JR',
            'description' => 'A Junior Admin'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Normal',
            'description' => 'A normal user'
        ]);
    }
}
