<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FleetResource\Pages;
use App\Models\Fleet;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Storage;

class FleetResource extends Resource
{
    protected static ?string $model = Fleet::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Kendaraan & Alat Berat';

    protected static ?string $modelLabel = 'Unit';

    protected static ?string $pluralModelLabel = 'Kendaraan & Alat Berat';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Unit')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('class')
                ->label('Kategori (Misal: Excavator, Mobil Operasional, Dump Truck)')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('capacity')
                ->label('Kapasitas (penumpang/ton/m³)')
                ->numeric()
                ->required()
                ->minValue(1),

            Forms\Components\FileUpload::make('photo')
                ->label('Foto Unit')
                ->image()
                ->disk('public')
                ->directory('fleets')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                ->maxSize(2048)
                ->required(fn ($livewire) => $livewire instanceof Pages\CreateFleet),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi / Spesifikasi')
                ->nullable()
                ->rows(4)
                ->columnSpanFull(),
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

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Unit')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('class')
                    ->label('Kategori')
                    ->searchable(),

                Tables\Columns\TextColumn::make('capacity')
                    ->label('Kapasitas')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (Fleet $record) {
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
            'index'  => Pages\ListFleets::route('/'),
            'create' => Pages\CreateFleet::route('/create'),
            'edit'   => Pages\EditFleet::route('/{record}/edit'),
        ];
    }
}
