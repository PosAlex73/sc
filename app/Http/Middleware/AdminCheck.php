<?php

namespace App\Http\Middleware;

use App\Enums\UserTypes;
use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!empty($user) && in_array($user->role, [UserTypes::ADMIN, UserTypes::MODERATOR])) {
            return $next($request);
        }

        return route('login');
    }
}
