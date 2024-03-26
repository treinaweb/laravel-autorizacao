<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        $resposta = Gate::inspect('acessar_funcionarios');

        if (! $resposta->allowed()) {
            abort(403, $resposta->message());
        }

        return view('funcionarios.index');
    }
}
