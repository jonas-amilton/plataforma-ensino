<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se ele é administrador
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Permite o acesso
        }

        // Caso contrário, redireciona para a página inicial ou outra página
        return redirect('/')->with('error', 'Acesso negado. Você não é administrador.');
    }
}