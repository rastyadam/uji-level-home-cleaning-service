<?php

namespace App\Filament\Resources\Promo_codesResource\Pages;

use App\Filament\Resources\Promo_codesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromo_codes extends ListRecords
{
    protected static string $resource = Promo_codesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
