<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoffeeDescriptionResource\Pages;
use App\Filament\Resources\CoffeeDescriptionResource\RelationManagers;
use App\Models\CoffeeDescription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoffeeDescriptionResource extends Resource
{
    protected static ?string $model = CoffeeDescription::class;

    protected static ?string $modelLabel = "Café Descrições";

    protected static ?string $navigationLabel = 'Descrição do banner';

    protected static ?string $navigationGroup = "Café da Manhã";

    protected static ?string $navigationIcon = 'tabler-mug';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('text')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)

            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('text')
                    ->words(12),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCoffeeDescriptions::route('/'),
        ];
    }
}
