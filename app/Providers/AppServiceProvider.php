<?php

namespace App\Providers;

use App\Category;
use App\Item;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('sidebar', function ($view) {
            $view->with('categories', Category::all());
        });
        view()->composer('random', function ($view) {
            $view->with('item', Item::all()->random());
        });
        view()->composer('content-bottom', function ($view) {
            $view->with('items', $items = Item::take(3)->get());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
