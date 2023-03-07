<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\admin\adminController;

class SiteMaintenance extends adminController
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
            this function deals with maintenance for those who are not authorized to access the site, 
            when maintenance is started, 
            it is checked if the user who accesses any page is admin and if he is admin, 
            he is allowed to access the page
        */
        $maintenanceMode = DB::table('website_config')->select('maintenance_mode')->first();

        if (!$this->CheckIsAdmin()) {
            if ($maintenanceMode && $maintenanceMode->maintenance_mode == true) {
                return response(abort(503));
            }
        }
        return $next($request);
    }
}
