<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EntrustRelatedSeeder::class);



        Artisan::call('passport:install', ['--force' => true]);
        // shell_exec('php artisan passport:install --force');
    }
}
