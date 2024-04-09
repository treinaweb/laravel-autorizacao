<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Client;
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
        Gate::define('acessar_funcionarios', function(User $user, string $departamento = 'outros') {
            if ($user->is_admin == true || $departamento === 'RH') {
                return Response::allow();
            }

            return Response::deny('Você não tem acesso a esse recurso!');
        });

        Gate::define('create_cliente', function($user) {
            if ($user->is_admin == true) {
                return Response::allow();
            }

            return Response::deny('Você não tem acesso a esse recurso!');
        });

        Gate::define('destroy_cliente', function(User $user, Client $cliente) {
            if ($cliente->owner_id == $user->id) {
                return Response::allow();
            }

            return Response::deny('Você não tem acesso a esse recurso!');
        });

    }
}
