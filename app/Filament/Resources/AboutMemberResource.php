<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMemberResource\Pages;
use App\Filament\Resources\AboutMemberResource\RelationManagers;
use App\Models\AboutMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutMemberResource extends Resource
{
    protected static ?string $model = AboutMember::class;

    protected static ?string $modelLabel = "Sobre Membros";

    protected static ?string $navigationLabel = 'Funcionários';

    protected static ?string $navigationGroup = "Sobre Nós";

    protected static ?int $navigationSort = -9;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->required(),
                Forms\Components\TextInput::make('text')
                    ->required(),
                Forms\Components\TextInput::make('instagram'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('public'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable()
                    ->words(2),
                Tables\Columns\TextColumn::make('text')
                    ->searchable()
                    ->words(6),
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
            'index' => Pages\ManageAboutMembers::route('/'),
        ];
    }
}
