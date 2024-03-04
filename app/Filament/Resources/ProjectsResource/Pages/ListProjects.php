<?php

namespace App\Filament\Resources\ProjectsResource\Pages;

use App\Filament\Exports\ProjectExporter;
use App\Filament\Resources\ProjectsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectsResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }

    protected function getActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->exporter(ProjectExporter::class)
                ->color('primary'),
            Actions\CreateAction::make(),
        ];
    }
}
