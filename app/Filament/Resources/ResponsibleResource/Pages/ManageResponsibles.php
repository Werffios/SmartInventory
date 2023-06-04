<?php

namespace App\Filament\Resources\ResponsibleResource\Pages;

use App\Filament\Resources\ResponsibleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageResponsibles extends ManageRecords
{
    protected static string $resource = ResponsibleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
