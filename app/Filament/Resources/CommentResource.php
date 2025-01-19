<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages\CreateComment;
use App\Filament\Resources\CommentResource\Pages\EditComment;
use App\Filament\Resources\CommentResource\Pages\ListComments;
use App\Filament\Resources\CommentResource\Pages\ViewComment;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Filament\Forms\Components\Grid as FormGrid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationLabel = 'Comments';

    protected static ?string $modelLabel = 'Comments';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?string $navigationGroup = 'Content';
    // protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('Comment Details')
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

                                FormSelect::make('post_id')
                                    ->options(Post::pluck('content', 'id'))
                                    ->label('Post')
                                    ->placeholder('Select a post')
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
                TextColumn::make('post.user.username')
                    ->label('Linked Post')
                    ->searchable(),
                TextColumn::make('content')
                    ->label('Content')
                    ->markdown()
                    ->searchable()
                    ->lineClamp(2),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
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
            'index' => ListComments::route('/'),
            'create' => CreateComment::route('/create'),
            'view' => ViewComment::route('/{record}'),
            'edit' => EditComment::route('/{record}/edit'),
        ];
    }
}
