<?php

namespace App\Filament\Pages;

use App\Models\BlogPost;
use App\Models\Fleet;
use App\Models\GalleryPhoto;
use App\Models\User;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $title = 'Dashboard';

    protected static ?int $navigationSort = 0;

    // Override the default Filament dashboard
    protected static string $view = 'filament.pages.dashboard';

    // Replace the built-in dashboard page
    protected static ?string $slug = '/';

    public function getViewData(): array
    {
        return [
            'fleetCount'        => Fleet::count(),
            'galleryCount'      => GalleryPhoto::count(),
            'blogCount'         => BlogPost::count(),
            'blogPublishedCount'=> BlogPost::whereNotNull('published_at')->where('published_at', '<=', now())->count(),
            'userCount'         => User::count(),
        ];
    }
}
