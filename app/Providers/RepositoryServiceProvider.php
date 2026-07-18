<?php

namespace App\Providers;

use App\Interfaces\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Auth\AuthRepositoryInterface;
use App\Repositories\Auth\AuthRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
           ProductRepositoryInterface::class,
           ProductRepository::class,
        );

        // Auth binding

         $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
