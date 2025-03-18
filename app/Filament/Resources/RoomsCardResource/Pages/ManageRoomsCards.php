<?php

namespace App\Filament\Resources\RoomsCardResource\Pages;

use App\Filament\Resources\RoomsCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRoomsCards extends ManageRecords
{
    protected static string $resource = RoomsCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
