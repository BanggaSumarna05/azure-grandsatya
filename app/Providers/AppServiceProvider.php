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
        // Fix untuk shared hosting yang menonaktifkan symlink()
        // Buat public/storage → storage/app/public secara manual saat boot
        $this->createStorageLink();

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

    /**
     * Buat storage link manual jika symlink() dinonaktifkan di hosting.
     * Hanya berjalan sekali jika folder public/storage belum ada.
     */
    protected function createStorageLink(): void
    {
        $publicStorage = public_path('storage');
        $storageApp    = storage_path('app/public');

        // Sudah ada symlink atau folder → skip
        if (file_exists($publicStorage) || is_link($publicStorage)) {
            return;
        }

        // Coba symlink dulu (jika diizinkan)
        if (function_exists('symlink')) {
            @symlink($storageApp, $publicStorage);
            return;
        }

        // Fallback: buat folder & salin file (untuk hosting yang blokir symlink)
        if (!is_dir($publicStorage)) {
            @mkdir($publicStorage, 0755, true);
        }
    }

}