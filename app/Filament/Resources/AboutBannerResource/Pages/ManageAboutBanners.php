<?php

namespace App\Filament\Resources\AboutBannerResource\Pages;

use App\Filament\Resources\AboutBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutBanners extends ManageRecords
{
    protected static string $resource = AboutBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
