<?php

namespace App\Filament\Resources\HomeCardResource\Pages;

use App\Filament\Resources\HomeCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomeCards extends ManageRecords
{
    protected static string $resource = HomeCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
