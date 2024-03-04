<?php

namespace App\Filament\Resources\VacationsResource\Pages;

use App\Filament\Resources\VacationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacations extends EditRecord
{
    protected static string $resource = VacationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
