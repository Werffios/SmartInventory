<?php

namespace App\Filament\Resources\AssetResource\Widgets;

use App\Models\Asset;
use Closure;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestAssets extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return Asset::query()
            ->latest()
            ->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('placa')
                ->searchable()
                ->sortable(),
            TextColumn::make('category.name')
                ->searchable()
                ->sortable(),
            TextColumn::make('department.name')
                ->searchable()
                ->sortable(),
        ];
    }
}
