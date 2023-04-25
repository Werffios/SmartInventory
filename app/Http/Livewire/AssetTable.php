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

    public bool $viewingModal = false;
    public bool $currentModal = false;


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
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                    ->title(fn($row) => 'View ' . $row->name)
                        ->location(fn($row) => route('login', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn($row) => 'Edit ' . $row->name)
                        ->location(fn($row) => route('login', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline ',
                            ];
                        }),
                ]),
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

            //Column::make("Responsable", "responsible.name")
            //    ->sortable()
            //    ->searchable(),



            BooleanColumn::make("Mant.", "maintenance")
                ->collapseOnTablet()
                ->sortable(),

        ];
    }

}
