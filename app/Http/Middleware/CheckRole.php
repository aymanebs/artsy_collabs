<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $roles=[
            'admin' => 1,
            'artist' => 2,
        ];

        if(!in_array(auth()->user()->role_id,$roles)){
            abort(403);
            return false;
        }

        if($roles[$role] != auth()->user()->role_id){
            abort(403,'You don\'t have access to this page');
        }

        return $next($request);
    }
}
