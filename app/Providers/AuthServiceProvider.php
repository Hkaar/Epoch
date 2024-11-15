<?php

namespace App\Providers;

use App\Enum\RoleEnum;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->checkPermission(RoleEnum::Admin);
        });

        Gate::define('moderator', function (User $user) {
            return $user->checkPermission(RoleEnum::Moderator);
        });

        Gate::define('member', function (User $user) {
            return $user->checkPermission(RoleEnum::Member);
        });

        Gate::define('operator', function (User $user) {
            return $user->checkPermission(RoleEnum::Operator);
        });

        Gate::define('dashboard', function (User $user) {
            return $user->checkPermission([RoleEnum::Admin, RoleEnum::Operator, RoleEnum::Moderator]);
        });
    }
}
