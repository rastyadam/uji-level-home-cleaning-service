<?php

namespace App\Filament\Resources\Promo_codesResource\Pages;

use App\Filament\Resources\Promo_codesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromo_codes extends EditRecord
{
    protected static string $resource = Promo_codesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
