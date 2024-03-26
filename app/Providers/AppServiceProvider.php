<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('acessar_funcionarios', function(User $user) {
            if ($user->is_admin == true) {
                return Response::allow();
            }

            return Response::deny('Você não tem acesso a esse recurso!');
        });
    }
}
