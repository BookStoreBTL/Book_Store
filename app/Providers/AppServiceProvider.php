<?php

namespace App\Providers;
use App\Cart;
use URL;

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

        URL::forceScheme('https');
        view()->composer('*',function($view) {
            $view->with([
                'cart' => new Cart()               
            ]);
        });
    }
}
