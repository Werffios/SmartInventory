<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonResource\Pages;
use App\Filament\Resources\PersonResource\RelationManagers;
use App\Models\Person;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;
    protected static ?string $navigationGroup = 'Personal';

    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nombre')
                    ->required()
                    ->minLength(3)
                    ->maxLength(20)
                    ->disableAutocomplete()
                    ->placeholder('Ingrese el nombre')
                    ->helperText('Escribe el nombre.'),
                TextInput::make('last_name')->label('Apellido')
                    ->required()
                    ->minLength(3)
                    ->maxLength(20)
                    ->disableAutocomplete()
                    ->placeholder('Ingrese el apellido')
                    ->helperText('Escribe el apellido.'),
                TextInput::make('document')->label('Documento')
                    ->required()
                    ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->integer()
                    )
                    ->disableAutocomplete()
                    ->minLength(3)
                    ->maxLength(20)
                    ->placeholder('Ingrese el documento')
                    ->helperText('Escribe el documento.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')->label('Apellido')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('document')->label('Documento')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePerson::route('/create'),
            'edit' => Pages\EditPerson::route('/{record}/edit'),
        ];
    }
}
