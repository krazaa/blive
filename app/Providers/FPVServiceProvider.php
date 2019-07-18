<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Fpvideos;

class FPVServiceProvider extends ServiceProvider
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

        $fpv = Fpvideos::select('title','description','ytlink','plink')->get();

        return $view->with('fpv', $fpv);
            });
    }
}
