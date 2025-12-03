<?php

namespace App\Filament\Resources\ServicesResource\Pages;

use App\Filament\Resources\ServicesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Support\Str;


class CreateServices extends CreateRecord
{
    
    protected static string $resource = ServicesResource::class;
}
