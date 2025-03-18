<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Filament\Resources\HomeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeBanners extends ManageRecords
{
    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
