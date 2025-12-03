<?php

namespace App\Filament\Resources\ServcesphotosResource\Pages;

use App\Filament\Resources\ServcesphotosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServcesphotos extends EditRecord
{
    protected static string $resource = ServcesphotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
