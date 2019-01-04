<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $userId = Auth::id();
        return view('projetos.formulario', compact('userId') );
    }

    public function novoForm($id = null)
    {
        $userId = Auth::id();
        return view('projetos.formulario', compact('userId') );
    }

    public function salvar(Request $request)
    {
        $projeto = new Projeto();

        if ($projeto -> create($request->all())){
            \Session::flash('messagem_sucesso', 'Projeto Publicado com Sucesso!');

            return Redirect::to('projetos');
        }else{
            \Session::flash('messagem_erro', 'Erro no envio de dados!');
            return Redirect::to('projetos');
        }
    }
}
