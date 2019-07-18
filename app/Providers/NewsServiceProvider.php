<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\News;

class NewsServiceProvider extends ServiceProvider
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

        $news = News::all();

        return $view->with('news', $news);
            });
    }
}
