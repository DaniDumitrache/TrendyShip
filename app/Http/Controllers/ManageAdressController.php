<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageAdressController extends Controller
{
    public function ValidateEditAdress(Request $req)
    {
        $validation = $req->validate(
            [
                'LastNameAndFirstName' => 'required|max:255',
                'PhoneNumber' => 'required|regex:/^(?:(\+))?(?:[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{4}\)))?(\d{4})(?:(?!\(\d{4})\))?[\s.\/-]?)?$/',
                'County' => 'required|max:255',
                'local' => 'required|max:255',
                'Adress' => 'required|max:255'
            ],
            [
                'required' => 'Acest camp este obligatoriu',
                'email' => 'Adresa de email invalida',
                'regex' => 'Formatul numărului de telefon este incorect.'
            ]
        );

        // TODO: Fix Problem Return To Last page
        // if ($req->has("Back")) {
        //     return back();
        // }

        if ($validation) {
            return $this->EditAdress($req);
        }
    }

    public function index()
    {
        return view("account.manage-address");
    }


    public function EditAdress($req)
    {
        $user = Auth::user();
        $user->name = $req['LastNameAndFirstName'];
        $user->Phone = $req['PhoneNumber'];
        $user->County = $req['County'];
        $user->Local = $req['local'];
        $user->adress = $req['Adress'];
        $user->save();

        return back();
    }
}
