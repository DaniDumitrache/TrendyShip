<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('account.account-change-password');
    }

    public function ValidateChangePassword(Request $req)
    {
        $validator = $req->validate(
            [
                'ActualPassword' => 'required',
                'NewPassword' => 'required'
            ],
            [
                'required' => 'Acest camp este obligatoriu!',
            ]
        );

        if ($req['ActualPassword'] != $req['NewPassword']) {
            if (Hash::check($req->ActualPassword, Auth::user()->password)) {
                if ($validator) {
                    return $this->ChangePassword($req);
                }
            } else {
                return redirect()->back()->withInput($req->only('email', 'remember'))->withErrors([
                    'ActualPassword' => 'parola invalida',
                ]);
            }
        } else {
            return redirect()->back()->withInput($req->only('email', 'remember'))->withErrors([
                'NewPassword' => 'va rugam sa introduceti o parola diferita!'
            ]);
        }
    }

    public function ChangePassword($req)
    {
        $user = Auth::user();
        $user->password = Hash::make($req['NewPassword']);
        $user->save();

        return $this->index();
    }
}
