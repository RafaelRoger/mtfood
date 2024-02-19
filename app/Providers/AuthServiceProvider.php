<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
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
        //
        $this->registerPolicies();

        Gate::define('admin', function (User $user) : bool {
            return (bool) ($user->level == 1);
        });

        Gate::define('user.edit', function (User $user, User $afectedUser) : bool {
            return ((bool) ($user->level == 1) || $user->id === $afectedUser->id);
        });
    }
}
