<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages\CreatePost;
use App\Filament\Resources\PostResource\Pages\EditPost;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Filament\Resources\PostResource\Pages\ViewPost;
use App\Models\ContentType;
use App\Models\Post;
use App\Models\User;
use Filament\Forms\Components\Grid as FormGrid;
use Filament\Forms\Components\Repeater;
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

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Posts';

    protected static ?string $modelLabel = 'Posts';

    protected static ?string $recordTitleAttribute = 'content';

    protected static ?string $navigationGroup = 'Content';
    // protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('Post Details')
                    ->icon('lucide-info')
                    ->schema([
                        FormGrid::make()
                            ->schema([
                                FormSelect::make('user_id')
                                    ->options(User::pluck('username', 'id'))
                                    ->label('User')
                                    ->placeholder('Select a User')
                                    ->searchable()
                                    ->required(),
                                RichEditor::make('content')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ]),
                FormSection::make('Post Contents')
                    ->icon('lucide-message-square-text')
                    ->schema([
                        Repeater::make('contents')
                            ->schema([
                                FormGrid::make()
                                    ->schema([
                                        FormSelect::make('content_type_id')
                                            ->options(ContentType::pluck('name', 'id'))
                                            ->label('Type of content')
                                            ->placeholder('Select a type')
                                            ->searchable()
                                            ->required(),
                                        RichEditor::make('content')
                                            ->columnSpanFull()
                                            ->required(),
                                    ]),
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
                TextColumn::make('content')
                    ->label('Content')
                    ->markdown()
                    ->lineClamp(2)
                    ->searchable(),
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
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'view' => ViewPost::route('/{record}'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}
