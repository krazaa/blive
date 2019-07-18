<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Setting;

class configServiceProvider extends ServiceProvider
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

        $config = Setting::find(1);

        return $view->with('config', $config);
            });
    }
}
