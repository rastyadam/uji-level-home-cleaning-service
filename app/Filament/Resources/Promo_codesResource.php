<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Promo_codesResource\Pages;
// use App\Filament\Resources\PromocodesResource\RelationManagers;
use App\Models\Promo_codes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Promo_codesResource extends Resource
{
    protected static ?string $model = Promo_codes::class;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->label('Promo Code')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('discount_amount')
                    ->label('Discount Amount')
                    ->numeric()
                    ->required()
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('code')->searchable(),
                Tables\Columns\TextColumn::make('discount_amount')
                    ->label('Discount')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
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
            'index' => Pages\ListPromo_codes::route('/'),
            'create' => Pages\CreatePromo_codes::route('/create'),
            'edit' => Pages\EditPromo_codes::route('/{record}/edit'),
        ];
    }    
}
