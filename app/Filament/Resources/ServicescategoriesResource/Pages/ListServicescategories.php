<?php

namespace App\Filament\Resources\ServicescategoriesResource\Pages;

use App\Filament\Resources\ServicescategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicescategories extends ListRecords
{
    protected static string $resource = ServicescategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
