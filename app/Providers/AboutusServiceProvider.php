<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class AboutusServiceProvider extends ServiceProvider
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

        $about = Page::find(1)->where('isHome',true)->get();

        return $view->with('about', $about);
            });
    }
}
