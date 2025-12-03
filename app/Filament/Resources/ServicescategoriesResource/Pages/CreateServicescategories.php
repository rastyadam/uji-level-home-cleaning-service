<?php

namespace App\Filament\Resources\ServicescategoriesResource\Pages;

use App\Filament\Resources\ServicescategoriesResource;
use Filament\Resources\Pages\CreateRecord;


class CreateServicescategories extends CreateRecord
{
    protected static string $resource = servicescategoriesResource::class;

    protected function getFormSchema(): array
    {
        return [
           
        ];
    }
}
