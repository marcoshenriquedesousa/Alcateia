<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function editar($id)
    {
        $projetoId = Auth::id();
        $verificarProjeto = $this->verificarProjetos($projetoId);
        if ($verificarProjeto == 1){
            return Redirect::to('Home');
        }else{
            $dados = DB::table('projetos')->select('projetos.*')->where('projetos.id','=',$id)->get();
            return view('projetos.editar', compact('dados', 'id'));
        }
        return $verificarProjeto;
    }

    public function verificarProjetos($id)
    {

        $dados = DB::table('projetos')->select('projetos.*')->where('projetos.id','=',$id)->get();

        $status = 1;

        if ($dados == '[]'){
            return $status;
        }else{
            $status = 2;
            return $status;
        }
    }

    public function atualizar ($id, Request $request)
    {
        $idProjeto = $request->projetoId;
        $projeto = Projeto::find($idProjeto); return $projeto;
        $projeto->name = $request->name;

        if ($projeto->update($request->all())){
            \Session::flash('messagem_sucesso', 'Projeto Publicado com Sucesso!');

            return Redirect::to('projetos');
        }else{
            \Session::flash('messagem_erro', 'Erro no envio de dados!');
            return Redirect::to('projetos');
        }
    }


}
