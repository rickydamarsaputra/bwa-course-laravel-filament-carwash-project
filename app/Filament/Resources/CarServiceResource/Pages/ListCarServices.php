<?php

namespace App\Filament\Resources\CarServiceResource\Pages;

use App\Filament\Resources\CarServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarServices extends ListRecords
{
    protected static string $resource = CarServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
