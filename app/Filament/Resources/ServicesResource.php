<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesResource\Pages;
use App\Filament\Resources\ServicesResource\RelationManagers;
use App\Models\Services;
use App\Models\Servicescategories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;

class ServicesResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static ?string $navigationIcon = 'heroicon-s-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Nama Service
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                // Slug otomatis
                TextInput::make('slug')
                    ->required()
                    ->unique('services', 'slug')
                    ->maxLength(255)
                    ->disabled(),

                // Pilih Kategori
                Select::make('category_id')
                    ->label('Category')
                    ->required()
                    ->options(Servicescategories::all()->pluck('name', 'id'))
                    ->searchable(),

                // Deskripsi
                Textarea::make('description')
                    ->maxLength(500),

                // Harga
                TextInput::make('price')
                    ->numeric()
                    ->required(),

                // Icon / Gambar (opsional)
                FileUpload::make('thumbnail')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('price')->money('idr', true),
                ImageColumn::make('thumbnail')->circular(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateServices::route('/create'),
            'edit' => Pages\EditServices::route('/{record}/edit'),
        ];
    }
}
