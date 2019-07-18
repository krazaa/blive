<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Setting;

class TopnavServiceProvider extends ServiceProvider
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

        $topnav = Setting::find(1);

        return $view->with('topnav', $topnav);
            });
    }
}
