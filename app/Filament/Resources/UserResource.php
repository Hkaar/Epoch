<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\ViewUser;
use App\Models\Role;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid as FormGrid;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\Select as FormSelect;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Users';

    protected static ?string $modelLabel = 'Users';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Management';

    // protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('User Details')
                    ->icon('lucide-info')
                    ->schema([
                        FileUpload::make('img')
                            ->label('Profile Photo')
                            ->image()
                            ->avatar()
                            ->columnSpanFull(),
                        FormGrid::make()->schema([
                            TextInput::make('name')
                                ->maxLength(255)
                                ->default(null),
                            TextInput::make('username')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('email')
                                ->email()
                                ->required()
                                ->maxLength(255),
                            FormSelect::make('role_id')
                                ->options(Role::pluck('name', 'id'))
                                ->label('Role')
                                ->placeholder('Select a role')
                                ->searchable(),
                            TextInput::make('password')
                                ->password()
                                ->required()
                                ->revealable()
                                ->maxLength(255)
                                ->confirmed(),
                            TextInput::make('password_confirmation')
                                ->password()
                                ->required()
                                ->maxLength(255),
                        ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('username')
                    ->searchable(),
                TextColumn::make('role.name')
                    ->label('Role')
                    ->sortable(),
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'view' => ViewUser::route('/{record}'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
