<?php

namespace App\Filament\Resources\Service_transactionsResource\Pages;

use App\Filament\Resources\Service_transactionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListService_transactions extends ListRecords
{
    protected static string $resource = service_transactionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
