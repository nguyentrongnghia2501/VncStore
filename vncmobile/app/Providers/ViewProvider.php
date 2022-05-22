<?php

namespace App\Providers;

use App\Http\View\Composers\MenuComposers;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
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
        View::composer('main',MenuComposers::class);
 
        
    }
}
