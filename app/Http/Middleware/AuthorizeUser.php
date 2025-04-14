<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ... $roles): Response
    {
        $user_role = $request->user()->getRole();
        if(in_array($user_role, $roles)){ //cek apakah level_kode user ada di dalam array roles
            return $next($request); //jika ada maka lanjutkan req
        }
        abort(403, 'forbidden. kamu tidak punya akses halaman ini');
    }
}
