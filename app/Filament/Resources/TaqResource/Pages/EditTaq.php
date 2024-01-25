<?php

namespace App\Filament\Resources\TaqResource\Pages;

use App\Filament\Resources\TaqResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTaq extends EditRecord
{
    protected static string $resource = TaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
