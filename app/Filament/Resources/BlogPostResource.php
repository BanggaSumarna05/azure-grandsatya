<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Blog';

    protected static ?string $modelLabel = 'Artikel Blog';

    protected static ?string $pluralModelLabel = 'Blog';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul')
                ->required()
                ->maxLength(255)
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set, $livewire) {
                    // Only auto-generate slug on create page
                    if ($livewire instanceof Pages\CreateBlogPost) {
                        $slug = Str::slug($state);
                        $original = $slug;
                        $count = 2;
                        while (BlogPost::where('slug', $slug)->exists()) {
                            $slug = $original . '-' . $count++;
                        }
                        $set('slug', $slug);
                    }
                })
                ->columnSpanFull(),

            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->maxLength(255)
                ->unique(BlogPost::class, 'slug', ignoreRecord: true)
                ->helperText('Otomatis dari judul. Tidak berubah saat edit.')
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('photo')
                ->label('Foto Cover')
                ->image()
                ->disk('public')
                ->directory('blog')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                ->maxSize(2048)
                ->nullable()
                ->columnSpanFull(),

            Forms\Components\Textarea::make('excerpt')
                ->label('Excerpt / Ringkasan')
                ->nullable()
                ->rows(3)
                ->helperText('Kosongkan untuk generate otomatis dari 150 karakter pertama konten.')
                ->columnSpanFull(),

            Forms\Components\Textarea::make('content')
                ->label('Konten')
                ->required()
                ->rows(16)
                ->columnSpanFull(),

            Forms\Components\DateTimePicker::make('published_at')
                ->label('Tanggal Publikasi')
                ->nullable()
                ->helperText('Kosongkan untuk menyimpan sebagai draft.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Cover')
                    ->disk('public')
                    ->height(50)
                    ->width(80),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(40)
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->getStateUsing(function (BlogPost $record): string {
                        if (! $record->published_at) return 'Draft';
                        if ($record->published_at->isFuture()) return 'Terjadwal';
                        return 'Publish';
                    })
                    ->colors([
                        'secondary' => 'Draft',
                        'warning'   => 'Terjadwal',
                        'success'   => 'Publish',
                    ]),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Dipublikasikan')
                    ->date('d M Y')
                    ->sortable()
                    ->default('Draft'),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (BlogPost $record) {
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
            'index'  => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit'   => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
