<?php

namespace App\Policies;

use App\Models\Client;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ClientPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create_cliente(User $user)
    {
        if ($user->is_admin == true) {
            return Response::allow();
        }

        return Response::deny('Você não tem acesso a esse recurso!');
    }

    public function destroy_cliente(User $user, Client $cliente)
    {
        if ($cliente->owner_id == $user->id) {
            return Response::allow();
        }

        return Response::deny('Você não tem acesso a esse recurso!');
    }
}
