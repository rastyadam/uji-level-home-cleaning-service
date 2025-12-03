<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicescategoriesResource\Pages;
use App\Filament\Resources\ServicescategoriesResource\RelationManagers;
use App\Models\Servicescategories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;




class servicescategoriesResource extends Resource
{
    protected static ?string $model = Servicescategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->reactive()
               ->afterStateUpdated(function ($state, callable $set) {
                    $set('slug', Str::slug($state));
                }),
                
                Forms\Components\TextInput::make('slug')
                ->required()
                ->unique('service_categories', 'slug')
                ->maxLength(255),

               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),
                ImageColumn::make('icon')
                ->circular(),
                
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicescategories::route('/'),
            'create' => Pages\CreateServicescategories::route('/create'),
            'edit' => Pages\EditServicescategories::route('/{record}/edit'),
        ];
    }    
}
