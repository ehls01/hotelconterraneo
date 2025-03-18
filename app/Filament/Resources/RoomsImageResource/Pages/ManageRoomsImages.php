<?php

namespace App\Filament\Resources\RoomsImageResource\Pages;

use App\Filament\Resources\RoomsImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRoomsImages extends ManageRecords
{
    protected static string $resource = RoomsImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
