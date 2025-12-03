<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Service_transactionsResource\Pages;
// use App\Filament\Resources\servicestransactionsResource\RelationManagers;
use App\Models\service_transactions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class Service_transactionsResource extends Resource
{
    protected static ?string $model = Service_transactions::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form->schema([
             Forms\Components\Select::make('user_id')
                ->label('User')
                ->relationship('user', 'name')
                ->required(),

            Forms\Components\TextInput::make('name')
                ->label('Customer Name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('phone')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('quantity')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('sub_total_amount')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('grand_total_amount')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('discount_amount')
                ->numeric()
                ->default(0)
                ->required(),

            Forms\Components\Select::make('promo_code_id')
                ->label('Promo Code')
                ->relationship('promo', 'code')
                ->searchable()
                ->nullable(),

            Forms\Components\Select::make('service_id')
                ->label('Service')
                ->relationship('service', 'name')
                ->required(),

            Forms\Components\Textarea::make('address')
                ->required(),

            Forms\Components\TextInput::make('post_code')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('city')
                ->required()
                ->maxLength(255),

            Forms\Components\Toggle::make('is_paid')
                ->label('Is Paid?')
                ->default(false),

            Forms\Components\TextInput::make('booking_code')
                ->required()
                ->maxLength(255),

            Forms\Components\FileUpload::make('proof')
                ->label('Payment Proof')
                ->directory('transaction_proofs')
                ->image()
                ->nullable(),

        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('service.name')
    ->label('Service')
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListService_transactions::route('/'),
            'create' => Pages\CreateService_transactions::route('/create'),
            'edit' => Pages\EditService_transactions::route('/{record}/edit'),
        ];
    }
}
