<?php

namespace App\Providers;

use App\Modules\Order\Interfaces\OrderRepositoryInterface;
use App\Modules\Order\Repositories\OrderRepository;
use Illuminate\Support\ServiceProvider;
use App\Modules\Product\Interfaces\ProductRepositoryInterface;
use App\Modules\Product\Repositories\ProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
