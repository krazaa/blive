<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Package;

class PackagesServiceProvider extends ServiceProvider
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

        $packages = Package::all();

        return $view->with('packagse', $packages);
            });
    }
}
