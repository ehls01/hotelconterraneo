<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoffeeCarouselResource\Pages;
use App\Filament\Resources\CoffeeCarouselResource\RelationManagers;
use App\Models\CoffeeCarousel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoffeeCarouselResource extends Resource
{
    protected static ?string $model = CoffeeCarousel::class;

    protected static ?string $modelLabel = "Café Carrosséis";

    protected static ?string $navigationLabel = 'Banner principal';

    protected static ?string $navigationGroup = "Café da Manhã";

    protected static ?string $navigationIcon = 'tabler-mug';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->multiple()
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCoffeeCarousels::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disables the "Create" button
    }
}
