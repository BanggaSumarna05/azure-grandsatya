<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryPhotoResource\Pages;
use App\Models\GalleryPhoto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Storage;

class GalleryPhotoResource extends Resource
{
    protected static ?string $model = GalleryPhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $modelLabel = 'Foto Galeri';

    protected static ?string $pluralModelLabel = 'Galeri Foto';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('photo')
                ->label('Foto')
                ->image()
                ->disk('public')
                ->directory('gallery')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                ->maxSize(5120)
                ->required(fn ($livewire) => $livewire instanceof Pages\CreateGalleryPhoto)
                ->columnSpanFull(),

            Forms\Components\TextInput::make('caption')
                ->label('Caption')
                ->nullable()
                ->maxLength(255),

            Forms\Components\Select::make('category')
                ->label('Kategori')
                ->options([
                    'events'  => 'Events',
                    'gallery' => 'Gallery',
                    'service' => 'Service',
                    'fleet'   => 'Fleet',
                ])
                ->default('gallery')
                ->required(),

            Forms\Components\TextInput::make('order')
                ->label('Urutan')
                ->numeric()
                ->default(0)
                ->minValue(0)
                ->helperText('Angka lebih kecil ditampilkan lebih dahulu.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->height(60)
                    ->width(90),

                Tables\Columns\TextColumn::make('caption')
                    ->label('Caption')
                    ->searchable()
                    ->limit(40)
                    ->default('-'),

                Tables\Columns\BadgeColumn::make('category')
                    ->label('Kategori')
                    ->enum([
                        'gallery' => 'Gallery',
                        'events'  => 'Events',
                        'service' => 'Service',
                        'fleet'   => 'Fleet',
                    ])
                    ->colors([
                        'primary' => 'gallery',
                        'success' => 'events',
                        'warning' => 'service',
                        'danger'  => 'fleet',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('order', 'asc')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (GalleryPhoto $record) {
                        if ($record->photo && Storage::disk('public')->exists($record->photo)) {
                            Storage::disk('public')->delete($record->photo);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListGalleryPhotos::route('/'),
            'create' => Pages\CreateGalleryPhoto::route('/create'),
            'edit'   => Pages\EditGalleryPhoto::route('/{record}/edit'),
        ];
    }
}
