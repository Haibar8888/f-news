<?php

namespace App\Filament\Resources\TrendingArticlesResource\Pages;

use App\Filament\Resources\TrendingArticlesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrendingArticles extends EditRecord
{
    protected static string $resource = TrendingArticlesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
