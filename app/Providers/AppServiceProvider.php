<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Passport\Client;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Client::creating(function (Client $client) {
            $client->incrementing = false;
            $client->id = (string) Str::orderedUuid();
        });

        Client::retrieved(function (Client $client) {
            $client->incrementing = false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::ignoreMigrations();
    }
}
