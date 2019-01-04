<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
                ->where('users.status_admin', '=', false)
                ->get();

            if ($dadosUsuario == '[]'){
                return redirect(route('projetos'));
            }elseif ($dadosUsuario != '[]'){
                return $next($request);
            }

        }

    }
}

