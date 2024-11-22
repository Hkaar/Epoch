<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('img')
                ->avatar()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '4:3',
                    '1:1',
                ]),
            Forms\Components\TextInput::make('name')
                ->maxLength(255)
                ->default(null),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('password')
                ->password()
                ->required(fn ($state) => ! $state)
                ->maxLength(255)
                ->label('Password'),
            Forms\Components\TextInput::make('password_confirmation')
                ->password()
                ->required(fn ($state, $get) => $get('password') && ! $state)
                ->maxLength(255)
                ->label('Confirm Password')
                ->same('password')
                ->helperText('Re-enter your password to confirm.'),
            Forms\Components\TextInput::make('username')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('role_id')
                ->label('Role')
                ->options(
                    function () {
                        return \App\Models\Role::pluck('name', 'id');
                    }
                )
                ->required(),
        ]);
    }
}
