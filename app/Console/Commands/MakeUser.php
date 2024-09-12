<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {username?} {email?} {password?} {role?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (Role::count() <= 0) {
            $this->error("\nRole table is empty, please seed the database first!");
            return 1;
        }

        $username = $this->argument('username') 
            ? $this->argument('username') 
            : $this->ask("What's the name of the user? ");

        $email = $this->argument('email')
            ? $this->argument('email')
            : $this->ask("What's the email that's going to be used? ");
        
        $validator = Validator::make([
            'username' => $this->argument('username'),
            'email' => $this->argument('email'),
        ], [
            'username' => 'unique:users,username',
            'email' => 'unique:users,email',
        ]);

        if ($validator->fails()) {
            $this->error("\nUsername and/or email was already taken!");
            return 1;
        }

        $password = $this->argument('password')
            ? $this->argument('password')
            : $this->ask('Please set a password for the user ');

        if (! $this->confirmPassword($password)) {
            $this->error('\nFailed to verify password!\n');

            return 1;
        };

        $roleName = $this->argument('role')
            ? $this->argument('role')
            : $this->ask('Please set a role for the user ');

        $role = Role::StrictByName($roleName)->first();

        if (! $role) {
            $this->error("\nRole {$roleName} does not exist!, or did you perhaps forget to seed the db?");

            return 1;
        }

        $user = new User;
        $user->fill([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role_id' => $role->id,
        ])->save();


        $this->info("\nGenerated User Profile\n" .
            "----------------------\n" .
            "username\t: " . $username . "\n" .
            "email\t\t: " . $email . "\n" .
            "password\t: " . $password . "\n" .
            "role\t\t: " . $roleName
        );

        return 0;
    }

    /**
     * Trigger a password confirmation process
     */
    private function confirmPassword(string $expected, int $tries = 3): bool
    {
        for ($i=0; $i < $tries; $i++) { 
            $answer = $this->ask("Please confirm the password");

            if ($answer === $expected) {
                return true;
            }

            $this->info("\n Password was wrong, please try again");
        }

        return false;
    }
}
