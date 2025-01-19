<?php

namespace App\Filament\Resources\ReplyResource\Pages;

use App\Filament\Resources\ReplyResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReply extends ViewRecord
{
    protected static string $resource = ReplyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->icon('lucide-edit'),
        ];
    }
}
