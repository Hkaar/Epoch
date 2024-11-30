<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReplyResource\Pages\CreateReply;
use App\Filament\Resources\ReplyResource\Pages\EditReply;
use App\Filament\Resources\ReplyResource\Pages\ListReplies;
use App\Filament\Resources\ReplyResource\Pages\ViewReply;
use App\Models\Reply;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReplyResource extends Resource
{
    protected static ?string $model = Reply::class;

    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.username')
                    ->label('User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('comment.user.username')
                    ->label('Linked Comment')
                    ->searchable(),
                TextColumn::make('content')
                    ->label('Content')
                    ->searchable()
                    ->lineClamp(2),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReplies::route('/'),
            'create' => CreateReply::route('/create'),
            'view' => ViewReply::route('/{record}'),
            'edit' => EditReply::route('/{record}/edit'),
        ];
    }
}
