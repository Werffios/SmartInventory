<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asset;

class AssetTable extends DataTableComponent
{
    protected $model = Asset::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [ // searchable(), sortable(),
            Column::make("Placa", "placa")
                ->searchable(),
            Column::make("Categoría", "category.name")
                ->sortable()
                ->searchable(),
            Column::make("Departamento", "department.name")
                ->sortable()
                ->searchable(),
            Column::make("Ubicación", "location.name")
                ->sortable()
                ->searchable(),
            Column::make("Modelo", "model.name")
                ->sortable(),
            Column::make("Estado", "status.name")
                ->sortable()
                ->searchable(),
            Column::make("Mant.", "maintenance")
                ->sortable(),
            Column::make("Frec. (años)", "maintenance_frequency")
                ->sortable(),
        ];
    }
}
