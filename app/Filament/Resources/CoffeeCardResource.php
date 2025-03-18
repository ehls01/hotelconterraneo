<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoffeeCardResource\Pages;
use App\Filament\Resources\CoffeeCardResource\RelationManagers;
use App\Models\CoffeeCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;

class CoffeeCardResource extends Resource
{
    protected static ?string $model = CoffeeCard::class;

    protected static ?string $modelLabel = "Café Cards";

    protected static ?string $navigationGroup = "Café da Manhã";

    protected static ?string $navigationLabel = 'Postagens';

    protected static ?string $navigationIcon = 'tabler-mug';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->image()
                ->required(),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\RichEditor::make('text')
                    ->required()
                    ->columnSpan(2)
                    ->disableToolbarButtons([
                        'attachFiles',
                        'strike',
                        'underline'
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)

            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('text')
                    ->words(12)
                    ->html(),
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
            'index' => Pages\ManageCoffeeCards::route('/'),
        ];
    }
}
