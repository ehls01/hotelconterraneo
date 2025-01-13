<?php

namespace App\Filament\Resources\RoomsBannerResource\Pages;

use App\Filament\Resources\RoomsBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRoomsBanners extends ManageRecords
{
    protected static string $resource = RoomsBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
