<?php

namespace App\Filament\Resources\TrendingArticlesResource\Pages;

use App\Filament\Resources\TrendingArticlesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrendingArticles extends ListRecords
{
    protected static string $resource = TrendingArticlesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
