<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\modules\Project;

class ProjectsServiceProvider extends ServiceProvider
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

        $projects = Project::all();

        return $view->with('projects', $projects);
            });
    }
}
