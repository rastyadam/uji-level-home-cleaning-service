<?php

namespace App\Filament\Resources\Cleaning_roomsResource\Pages;

use App\Filament\Resources\Cleaning_roomsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCleaning_rooms extends EditRecord
{
    protected static string $resource = Cleaning_roomsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
