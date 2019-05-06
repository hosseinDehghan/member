<?php

namespace Hosein\Members;


use Hosein\Members\Middleware\AuthMember;
use Illuminate\Support\ServiceProvider;

class MembersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'MemberView');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/MemberView'),
        ],"memberview");
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }
}
