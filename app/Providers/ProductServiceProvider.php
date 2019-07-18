<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Product;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('*', function($view){

        $products = Product::all();

        return $view->with('products', $products);
            });
    }
}
