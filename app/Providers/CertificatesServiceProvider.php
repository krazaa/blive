<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Certificate;

class CertificatesServiceProvider extends ServiceProvider
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

        $fpc = Certificate::select('title','img','id')->get();

        return $view->with('fpc', $fpc);
            });
    }
}
