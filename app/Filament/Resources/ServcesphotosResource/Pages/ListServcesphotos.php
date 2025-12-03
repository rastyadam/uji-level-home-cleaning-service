<?php

namespace App\Filament\Resources\ServcesphotosResource\Pages;

use App\Filament\Resources\ServcesphotosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServcesphotos extends ListRecords
{
    protected static string $resource = ServcesphotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
