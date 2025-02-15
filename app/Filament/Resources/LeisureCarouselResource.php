<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeisureCarouselResource\Pages;
use App\Filament\Resources\LeisureCarouselResource\RelationManagers;
use App\Models\LeisureCarousel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeisureCarouselResource extends Resource
{
    protected static ?string $model = LeisureCarousel::class;

    protected static ?string $modelLabel = "Lazer Carroséis";

    protected static ?string $navigationLabel = 'Banner principal';

    protected static ?string $navigationGroup = "Lazer";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->multiple()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('text')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text')
                    ->searchable()
                    ->limit(80),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageLeisureCarousels::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return true; // Disables the "Create" button
    }
}
