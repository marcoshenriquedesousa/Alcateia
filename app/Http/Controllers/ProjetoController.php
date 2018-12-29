<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        return view('projetos.lista');
    }

    public function novo()
    {
        return view('projetos.formulario');
    }

    public function salvar(Request $request)
    {

        $projeto = new Projeto();

        $projeto =  $projeto -> create($request->all());

        return $projeto;
    }
}
