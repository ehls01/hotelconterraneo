<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeCardResource\Pages;
use App\Filament\Resources\HomeCardResource\RelationManagers;
use App\Models\HomeCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeCardResource extends Resource
{
    protected static ?string $model = HomeCard::class;

    protected static ?string $modelLabel = "Home Cards";

    protected static ?string $navigationGroup = "Página incial";

    protected static ?string $navigationLabel = 'Comodidades';
    
    protected static ?int $navigationSort = -10;

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageHomeCards::route('/'),
        ];
    }
}
