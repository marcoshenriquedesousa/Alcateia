<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::get();
        return view('projetos.lista', ['projetos' => $projetos]);
    }

    public function novo()
    {
        return view('projetos.formulario');
    }

    public function salvar(Request $request)
    {

        $projeto = new Projeto();

        $projeto =  $projeto -> create($request->all());

        \Session::flash('messagem_sucesso', 'Projeto Publicado com Sucesso!');

        return Redirect::to('projetos/novo');
    }
}
