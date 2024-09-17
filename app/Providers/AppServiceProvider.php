<?php

namespace App\Providers;

use App\Http\Resources\LoginResource;
use App\Http\Resources\ProductResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //menghilangkan 'data' json pada resource tertentu
        // LoginResource::withoutWrapping();

        //menghilangkan 'data' json untuk semua
        // JsonResource::withoutWrapping();

        // Paginator::useBootstrapFour();
    }
}
