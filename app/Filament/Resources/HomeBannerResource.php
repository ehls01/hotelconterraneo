<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeBannerResource\Pages;
use App\Filament\Resources\HomeBannerResource\RelationManagers;
use App\Models\HomeBanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeBannerResource extends Resource
{
    protected static ?string $model = HomeBanner::class;

    protected static ?string $modelLabel = "Home Banners";

    protected static ?string $navigationLabel = 'Banner principal';

    protected static ?string $navigationGroup = "Página incial";

    protected static ?int $navigationSort = -10;

    protected static ?string $navigationIcon = 'heroicon-o-window';

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
                    ->ColumnSpan(2)
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
            'index' => Pages\ManageHomeBanners::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disables the "Create" button
    }

}
