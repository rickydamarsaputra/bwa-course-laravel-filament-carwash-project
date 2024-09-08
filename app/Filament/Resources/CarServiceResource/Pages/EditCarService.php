<?php

namespace App\Filament\Resources\CarServiceResource\Pages;

use App\Filament\Resources\CarServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarService extends EditRecord
{
    protected static string $resource = CarServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
