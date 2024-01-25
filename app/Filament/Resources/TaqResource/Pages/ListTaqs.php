<?php

namespace App\Filament\Resources\TaqResource\Pages;

use App\Filament\Resources\TaqResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaqs extends ListRecords
{
    protected static string $resource = TaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
