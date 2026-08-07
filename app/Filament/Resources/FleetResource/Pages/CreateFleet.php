<?php

namespace App\Filament\Resources\FleetResource\Pages;

use App\Filament\Resources\FleetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFleet extends CreateRecord
{
    protected static string $resource = FleetResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ensure photo path is stored correctly
        if (empty($data['photo'])) {
            $data['photo'] = null;
        }
        
        return $data;
    }
}
