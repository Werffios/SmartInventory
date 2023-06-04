<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResponsibleResource\Pages;
use App\Filament\Resources\ResponsibleResource\RelationManagers;
use App\Models\Responsible;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResponsibleResource extends Resource
{
    protected static ?string $model = Responsible::class;
    protected static ?string $navigationGroup = 'Administración';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('start_date')->label('Fecha de Inicio')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('end_date')->label('Fecha de Fin')
                    ->searchable()
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
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageResponsibles::route('/'),
        ];
    }
}
