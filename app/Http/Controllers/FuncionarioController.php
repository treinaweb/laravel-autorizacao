<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        if (! Gate::allows('acessar_funcionarios')) {
            abort(403, 'Você não tem acesso a esse recurso!');
        }

        return view('funcionarios.index');
    }
}
