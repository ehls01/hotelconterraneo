<?php

namespace App\Filament\Resources\CoffeeCardResource\Pages;

use App\Filament\Resources\CoffeeCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCoffeeCards extends ManageRecords
{
    protected static string $resource = CoffeeCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
