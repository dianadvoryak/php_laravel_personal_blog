<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isAdmin = auth()->user()->role === User::ROLE_ADMIN;
        $isModerator = auth()->user()->role === User::ROLE_MODERATOR;

        if($isAdmin || $isModerator){
            return $next($request);
        }
        abort(404);
    }
}
