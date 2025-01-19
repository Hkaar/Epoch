<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReplyResource\Pages\CreateReply;
use App\Filament\Resources\ReplyResource\Pages\EditReply;
use App\Filament\Resources\ReplyResource\Pages\ListReplies;
use App\Filament\Resources\ReplyResource\Pages\ViewReply;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use Filament\Forms\Components\Grid as FormGrid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\Select as FormSelect;
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

    protected static ?string $navigationLabel = 'Replies';

    protected static ?string $modelLabel = 'Replies';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?string $navigationGroup = 'Content';
    // protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('Reply Details')
                    ->icon('lucide-info')
                    ->schema([
                        FormGrid::make()
                            ->schema([
                                FormSelect::make('user_id')
                                    ->options(User::pluck('username', 'id'))
                                    ->label('User')
                                    ->placeholder('Select a user')
                                    ->searchable()
                                    ->required(),
                                FormSelect::make('comment_id')
                                    ->options(Comment::pluck('content', 'id'))
                                    ->label('Comment')
                                    ->placeholder('Select a comment')
                                    ->searchable()
                                    ->required(),
                                RichEditor::make('content')
                                    ->columnSpanFull()
                                    ->required(),
                            ]),
                    ]),
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
                    ->markdown()
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
