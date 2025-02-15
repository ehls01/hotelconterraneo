<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomsCardResource\Pages;
use App\Filament\Resources\RoomsCardResource\RelationManagers;
use App\Models\RoomsCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;

class RoomsCardResource extends Resource
{
    protected static ?string $model = RoomsCard::class;

    protected static ?string $modelLabel = "Quartos Cards";

    protected static ?string $navigationLabel = 'Categoria dos quartos';

    protected static ?string $navigationGroup = "Nossos Quartos";

    protected static ?int $navigationSort = -8;

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\RichEditor::make('text')
                    ->required()
                    ->disableToolbarButtons([
                        'attachFiles',
                        'strike',
                        'underline'
                    ]),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text')
                    ->searchable()
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
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
            'index' => Pages\ManageRoomsCards::route('/'),
        ];
    }
}
