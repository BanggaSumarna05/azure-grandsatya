<?php

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Log untuk debugging
        Log::info('BlogPost Create - Before Mutation', [
            'photo' => $data['photo'] ?? 'null',
            'all_data' => $data
        ]);

        // Ensure photo path is stored correctly
        if (empty($data['photo'])) {
            $data['photo'] = null;
        }
        
        // Auto-generate excerpt if empty
        if (empty($data['excerpt']) && !empty($data['content'])) {
            $data['excerpt'] = substr(strip_tags($data['content']), 0, 150);
        }

        Log::info('BlogPost Create - After Mutation', [
            'photo' => $data['photo'] ?? 'null'
        ]);
        
        return $data;
    }

    protected function afterCreate(): void
    {
        Log::info('BlogPost Created', [
            'id' => $this->record->id,
            'photo' => $this->record->photo
        ]);
    }
}
