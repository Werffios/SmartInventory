<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Filament\Resources\AssetResource\RelationManagers;
use App\Models\Asset;
use App\Models\Department;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('placa')->label('Placa del activo')
                    ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->integer()
                    )
                    ->required()
                    ->minLength(2)
                    ->maxLength(10)
                    ->placeholder('Ingrese la placa del activo')
                    ->helperText('Escribe la placa del activo.')
                    ->unique('assets', 'placa')

                    ->hint('La placa debe ser única.'),
                Select::make('maintenance')->label('¿Requiere mantenimiento? ')
                    ->required()
                    ->helperText('Seleccione si requiere mantenimiento.')
                    ->options([
                        '1' => 'Si requiere mantenimiento',
                        '0' => 'No requiere mantenimiento',
                    ]),
                Select::make('maintenance_frequency')->label('Frecuencia de mantenimiento')
                    ->required()
                    ->helperText('Seleccione la frecuencia de mantenimiento.')
                    ->options([
                        'mensual' => 'Mensual',
                        'bimestral' => 'Bimestral',
                        'trimestral' => 'Trimestral',
                        'semestral' => 'Semestral',
                        'anual' => 'Anual',
                    ]),
                Select::make('department_id')->label('Departamento')
                    ->placeholder('Seleccione el departamento')
                    ->options(
                        Department::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione el departamento.'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('placa')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email address copied')
                    ->copyMessageDuration(1500),
                IconColumn::make('maintenance')
                    ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
                    ->sortable(),
                TextColumn::make('department.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('model.brand.name')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
