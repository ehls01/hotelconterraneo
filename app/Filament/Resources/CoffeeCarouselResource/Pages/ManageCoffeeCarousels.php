<?php

namespace App\Filament\Resources\CoffeeCarouselResource\Pages;

use App\Filament\Resources\CoffeeCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCoffeeCarousels extends ManageRecords
{
    protected static string $resource = CoffeeCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
