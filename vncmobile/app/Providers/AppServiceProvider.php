<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $menus =  Menu::all();
        View::share('menus',$menus);
        $product =product::all();
        View::share('product',$product);
    }
}
