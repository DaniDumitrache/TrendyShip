<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class website_configController extends Controller
{
    public function website_config()
    {
        $website_config = DB::table('website_config')->first();

        return $this->website_config = $website_config;
    }
}
