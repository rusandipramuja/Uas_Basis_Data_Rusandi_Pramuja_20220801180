<?php

namespace App\Filament\Resources\TaqtResource\Pages;

use App\Filament\Resources\TaqtResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaqts extends ListRecords
{
    protected static string $resource = TaqtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
