<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asset;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;


class AssetTable extends DataTableComponent
{


    protected $model = Asset::class;

    public ?int $searchFilterDebounce = 250;

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
            ->setOfflineIndicatorEnabled()
            ->setBulkActionsEnabled();

        $this->setBulkActions([
            'exportSelected' => 'Export',
        ]);
    }
    public function edit($id)
    {
        $this->emit('editAsset', $id);
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()
                ->searchable(),
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
            Column::make("Responsable", "responsible.person.name")
                ->sortable()
                ->collapseOnTablet()
                ->searchable(),
            BooleanColumn::make("Mant.", "maintenance")
                ->collapseOnTablet()
                ->sortable(),

        ];
    }

    public function bulkActions(): array
    {
        return [
            'export' => 'Export',
        ];
    }
    public function query(): Builder
    {
        return User::query();
    }

}
