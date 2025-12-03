<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Cleaning_roomsResource\Pages;
use App\Filament\Resources\CleaningroomsResource\RelationManagers;
use App\Models\Cleaning_rooms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Cleaning_roomsResource extends Resource
{
    protected static ?string $model = Cleaning_rooms::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\TextInput::make('room_count')
                    ->label('Jumlah Ruangan')
                    ->numeric()
                    ->required()
                    ->minValue(1),

                Forms\Components\TextInput::make('price')
                    ->label('Harga (Rp)')
                    ->numeric()
                    ->required()
                    ->minValue(0),

                Forms\Components\TextInput::make('description')
                    ->label('Deskripsi')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('room_count')
                    ->label('Jumlah Ruangan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga (Rp)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
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
            'index' => Pages\ListCleaning_rooms::route('/'),
            'create' => Pages\CreateCleaning_rooms::route('/create'),
            'edit' => Pages\EditCleaning_rooms::route('/{record}/edit'),
        ];
    }    
}
