<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ValidatePassword extends Controller
{
    public function ValidatePassword(Request $req)
    {
        if (Hash::check($req->password, Auth::user()->password)) {
            switch ($req->action) {
                case 'Email':
                    return view('auth.ChangeEmail');
                    break;

                case 'Password':
                    return view('auth.ChangePassword');
                    break;
                case 'MultiFactorAuthentication':
                    return view('auth.2fa.2fa');
                    break;
            }
        } else {
            return view('auth.validatePassword')
                ->withErrors([
                    'password' => 'Email sau parola invalid/a',
                ])
                ->with(['action' => $req->action]);
        }
    }
}
