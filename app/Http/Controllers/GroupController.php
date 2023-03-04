<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::all();
        return view('admin.group.index')->with(['group' => $group]);
    }

    public function add()
    {
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
