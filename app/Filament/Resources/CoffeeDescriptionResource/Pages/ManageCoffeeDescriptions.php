<?php

namespace App\Filament\Resources\CoffeeDescriptionResource\Pages;

use App\Filament\Resources\CoffeeDescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCoffeeDescriptions extends ManageRecords
{
    protected static string $resource = CoffeeDescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
