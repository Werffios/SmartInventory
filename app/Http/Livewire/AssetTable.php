<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asset;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;


class AssetTable extends DataTableComponent
{
    protected $model = Asset::class;
    public ?int $searchFilterDebounce = 250;

    public bool $isModalOpen = true;


    public function configure(): void
    {
        $this
            ->setPrimaryKey('id')
            ->setDefaultSort('assets.id', 'desc')
            ->setSingleSortingDisabled()
            ->setTheadAttributes([
                'id' => 'idexample',
                'class' => 'bg-green-un',
            ])
            ->setHideBulkActionsWhenEmptyEnabled()
            ->setOfflineIndicatorEnabled();
    }

    public function columns(): array
    {
        return [

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

            //Column::make("Responsable", "responsible.person.name")
            //    ->sortable()
            //    ->searchable(),

            Column::make("Responsable", "responsible.id")
                ->sortable()
                ->searchable(),
            BooleanColumn::make("Mantenimiento", "maintenance")
                ->collapseOnTablet()
                ->sortable(),

        ];
    }

}
