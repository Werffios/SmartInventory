<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asset;

class AssetTable extends DataTableComponent
{
    protected $model = Asset::class;

    public ?int $searchFilterDebounce = 250;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('assets.id', 'desc');
        $this->setSingleSortingDisabled();
        $this->setTheadAttributes([
            'id' => 'idexample',
            'class' => 'bg-green-un'
        ]);
        $this->setOfflineIndicatorEnabled();
    }

    public function columns(): array
    {
        return [ // searchable(), sortable(),
            Column::make("Placa", "placa")
                ->searchable()
                ->html(),
            Column::make("Categoría", "category.name")
                ->sortable()
                ->collapseOnTablet()
                ->searchable(),
            Column::make("Departamento", "department.name")
                ->sortable()
                ->collapseOnTablet()
                ->searchable(),
            Column::make("Ubicación", "location.name")
                ->sortable()
                ->searchable(),
            Column::make("Modelo", "model.name")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Estado", "status.name")
                ->sortable()
                ->collapseOnTablet()
                ->searchable(),

            //Column::make("Responsable", "responsible.name")
            //    ->sortable()
            //    ->searchable(),



            Column::make("Mant.", "maintenance")
                ->collapseOnTablet()
                ->sortable(),
            Column::make("Frec. (años)", "maintenance_frequency")
                ->collapseOnTablet()
                ->sortable(),
        ];
    }
}
