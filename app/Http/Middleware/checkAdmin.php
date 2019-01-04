<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class checkAdmin
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
                ->where('users.status_admin', '=', true)
                ->get();

            if ($dadosUsuario == '[]'){
                return redirect(route('teste'));
            }elseif ($dadosUsuario != '[]'){
                return $next($request);
            }

        }
    }
}
