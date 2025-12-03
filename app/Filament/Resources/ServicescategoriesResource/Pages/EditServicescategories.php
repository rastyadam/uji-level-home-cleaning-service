<?php

namespace App\Filament\Resources\ServicescategoriesResource\Pages;

use App\Filament\Resources\ServicescategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicescategories extends EditRecord
{
    protected static string $resource = ServicescategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
