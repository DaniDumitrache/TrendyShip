<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\adminController;

class AdminAuthenticationMiddleware extends adminController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        /*
        This function check user is admin 
        if the user is not admin redirect to /
        */
        if (!$this->CheckIsAdmin()) {
            return redirect('/');
        }

        return $next($request);
    }
}
