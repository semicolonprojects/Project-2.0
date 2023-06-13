<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('curah', function (User $user) {
            return $user->role === 'curah' || $user->role === 'superadmin';
        });

        Gate::define('marketing', function (User $user) {
            return $user->role === 'marketing' || $user->role === 'superadmin';
        });

        Gate::define('finance', function (User $user) {
            return $user->role === 'finance' || $user->role === 'superadmin';
        });

        Gate::define('logistik', function (User $user) {
            return $user->role === 'logistik' || $user->role === 'superadmin';
        });

        Gate::define('superadmin', function (User $user) {
            return $user->role === 'superadmin';
        });
    }
}
