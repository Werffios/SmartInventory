<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Filament\Resources\AssetResource\RelationManagers;
use App\Models\Asset;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Department;
use App\Models\Location;
use App\Models\Model_Asset;
use App\Models\Status;
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
use Filament\Tables\Filters\SelectFilter;
class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-table';

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
                    ->disableAutocomplete()
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
                Select::make('category_id')->label('Categoría')
                    ->placeholder('Seleccione la categoría')
                    ->options(
                        Category::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione la categoría.'),
                Select::make('department_id')->label('Departamento')
                    ->placeholder('Seleccione el departamento')
                    ->options(
                        Department::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione el departamento.'),
                Select::make('location_id')->label('Ubicación')
                    ->placeholder('Seleccione la ubicación')
                    ->options(
                        Location::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione la ubicación.'),
                Select::make('model_id')->label('Modelo')
                    ->placeholder('Seleccione el modelo')
                    ->options(
                        Model_Asset::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione el modelo.'),
                Select::make('status_id')->label('Estado')
                    ->placeholder('Seleccione el estado')
                    ->options(
                        Status::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->helperText('Seleccione el estado.'),

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
                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('department.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('model.brand.name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('department_id')
                    ->label('Departamento')
                    ->options(
                        Department::all()->pluck('name', 'id')
                    )
                    ->searchable()
                    ->default(null),
                SelectFilter::make('location_id')
                    ->label('Ubicación')
                    ->options(
                        Location::all()->pluck('name', 'id')
                    )
                    ->searchable()
                    ->default(null),
                SelectFilter::make('category_id')
                    ->label('Categoría')
                    ->options(
                        Category::all()->pluck('name', 'id')
                    )
                    ->searchable()
                    ->default(null),

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
