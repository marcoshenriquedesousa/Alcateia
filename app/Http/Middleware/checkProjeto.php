<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class checkProjeto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !auth()->check() ){
            return redirect()->route('login');
        }else{


            $idUser = \auth()->user()->id;

            $dadosUsuario = DB::table('users')
                ->select('users.*')
                ->where('users.id', '=', $idUser)
                ->get();

            if ($dadosUsuario == '[]'){
                return redirect(route('Home'));
            }elseif ($dadosUsuario != '[]'){
                return $next($request);
            }

        }

    }
}

