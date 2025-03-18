<?php

namespace App\Filament\Resources\LeisureCarouselResource\Pages;

use App\Filament\Resources\LeisureCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLeisureCarousels extends ManageRecords
{
    protected static string $resource = LeisureCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
