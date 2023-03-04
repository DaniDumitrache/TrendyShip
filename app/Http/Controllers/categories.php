<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoryes;

class categories extends Controller
{
    //

    public function index()
    {
        $categoryes = categoryes::all();

        return view('admin.categories.index')->with(['categoryes' => $categoryes]);
    }

    public function Add()
    {
    }

    public function Edit()
    {
    }

    public function Delete()
    {
    }
}
