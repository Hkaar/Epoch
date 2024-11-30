<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\Role;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form->schema([
            FileUpload::make('img')
                ->avatar()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '4:3',
                    '1:1',
                ]),
            TextInput::make('name')
                ->maxLength(255)
                ->default(null),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            TextInput::make('password')
                ->password()
                ->required(fn ($state) => ! $state)
                ->maxLength(255)
                ->label('Password'),
            TextInput::make('password_confirmation')
                ->password()
                ->required(fn ($state, $get) => $get('password') && ! $state)
                ->maxLength(255)
                ->label('Confirm Password')
                ->same('password')
                ->helperText('Re-enter your password to confirm.'),
            TextInput::make('username')
                ->required()
                ->maxLength(255),
            Select::make('role_id')
                ->label('Role')
                ->options(
                    function () {
                        return Role::pluck('name', 'id');
                    }
                )
                ->required(),
        ]);
    }
}
