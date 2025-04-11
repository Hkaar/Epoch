<?php

namespace App\Filament\Resources\ReplyResource\Pages;

use App\Filament\Resources\ReplyResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReply extends EditRecord
{
    protected static string $resource = ReplyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()
                ->icon('lucide-eye'),
            DeleteAction::make()
                ->icon('lucide-trash-2'),
        ];
    }
}
