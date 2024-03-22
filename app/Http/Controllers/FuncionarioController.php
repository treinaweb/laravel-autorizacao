<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        // return "usuário não autenticado";

        // $usuario = Auth::user();
        // echo Auth::id();

        //$usuarioLogado = $request->user();
        // echo $usuarioLogado->email;

        return view('funcionarios.index');
    }
}
