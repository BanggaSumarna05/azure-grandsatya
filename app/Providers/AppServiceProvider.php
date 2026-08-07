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

        // HTML Minification for production
        if (config('app.env') === 'production') {
            $this->enableHtmlMinification();
        }
    }

    /**
     * Enable HTML output minification
     */
    protected function enableHtmlMinification()
    {
        $this->app['blade.compiler']->precompiler(function ($string) {
            // Remove HTML comments (except IE conditionals)
            $string = preg_replace('/<!--(?!\[if)(?!<!)[^\[>].*?-->/s', '', $string);
            // Remove whitespace between tags
            $string = preg_replace('/>\s+</', '><', $string);
            // Remove multiple spaces
            $string = preg_replace('/\s+/', ' ', $string);
            return $string;
        });
    }
}
