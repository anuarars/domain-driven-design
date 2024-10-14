<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(
            \App\Domain\Repositories\UserRepositoryInterface::class,
            \App\Infrastructure\Repositories\UserRepository::class
        );
    }    
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
