<?php

namespace App\Filament\Resources\AssetResource\Widgets;

use App\Models\Asset;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AssetStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Todos los activos', Asset::all()->count())
                ->description('Total de activos registrados')
                ->color('primary')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([0, Asset::all()->count()])
                ->icon('heroicon-o-table'),
            Card::make('Activos en mantenimiento', Asset::where('maintenance', 1)->count())
                ->chart([0, Asset::where('maintenance', 1)->count()])
                ->color('danger')
                ->icon('heroicon-o-clipboard-list'),
            Card::make('Activos sin mantenimiento', Asset::where('maintenance', 0)->count())
                ->chart([0, Asset::where('maintenance', 0)->count()])
                ->color('success')
                ->icon('heroicon-o-clipboard-list'),
            Card::make('Celulares', Asset::where('category_id', 1)->count())
                ->chart([0, Asset::where('category_id', 1)->count()])
                ->color('primary')
                ->icon('heroicon-o-device-mobile'),
            Card::make('Computadores', Asset::where('category_id', 2)->count())
                ->color('primary')
                ->chart([0, Asset::where('category_id', 2)->count()])
                ->icon('heroicon-o-desktop-computer'),
        ];
    }

}
