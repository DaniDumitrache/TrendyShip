<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\adminController;

class AdminAuth extends admincontroller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*
        this CheckIsAdmin return boolean admin from check is admin "true" or "false" and
        this GetGroupPermission if user is admin return group permission
        */
        view()->share(["admin" => $this->CheckIsAdmin(), "GroupPermission" => $this->GetGroupPermission()]);
        return $next($request);
    }
}
