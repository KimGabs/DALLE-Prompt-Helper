<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $menuItems = config('menu.items');
            $userRole = auth()->check() ? auth()->user()->role : 'guest';

            $filteredMenu = array_filter($menuItems, function ($item) use ($userRole) {
                return in_array($userRole, $item['roles']);
            });

            $view->with('menuItems', $filteredMenu);
        });
    }

}
