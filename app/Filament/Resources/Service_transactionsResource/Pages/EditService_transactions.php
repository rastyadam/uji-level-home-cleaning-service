<?php

namespace App\Filament\Resources\Service_transactionsResource\Pages;

use App\Filament\Resources\Service_transactionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditService_transactions extends EditRecord
{
    protected static string $resource = service_transactionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
