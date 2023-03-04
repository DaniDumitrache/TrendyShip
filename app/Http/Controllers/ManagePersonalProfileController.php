<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagePersonalProfileController extends Controller
{
    public function ValidateEditProfile(Request $req)
    {
        $validation = $req->validate(
            [
                'name' => 'required|max:255',
                'Email' => 'required|email',
            ],
            [
                'required' => 'Acest camp este obligatoriu',
                'email' => 'Adresa de email invalida',
            ]
        );

        // TODO: Fix Problem Return To Last page
        // if ($req->has("Back")) {
        //     return back();
        // }

        if ($validation) {
            return $this->EditProfile($req);
        }
    }

    public function index()
    {
        return view("account.manage-profile");
    }


    public function EditProfile($req)
    {
        $user = Auth::user();
        
        $user->name = $req['name'];
        $user->email = $req['Email'];
        $user->save();

        return back();
    }
}
