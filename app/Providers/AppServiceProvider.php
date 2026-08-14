<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::directive('currency', function ($money) {
            return "number_format($money, 2);";
        });

        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('Lihat Website')
                    ->url('/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-external-link')
                    ->sort(99),
            ]);
        });

    }

}