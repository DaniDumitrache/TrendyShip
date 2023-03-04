<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view("auth.ForgotPassword");
    }

    public function ValidateForgotPassword(Request $req)
    {
        $validation = $req->validate(
            [
                'Email' => 'required|email|exists:users,email'
            ],
            [
                'email' => 'email-ul este invalid'
            ]
        );

        if ($validation) {
            return $this->SendForgotPasswordLink($req);
        }
    }

    public function SendForgotPasswordLink($req)
    {
        $user = User::where(['email' => $req->Email])->update([
            'token' => uniqid(base64_encode($req->Email)),
            'remember_token_expire' =>  date('Y-m-d H:i:s', strtotime('+5 minutes', strtotime(date('Y-m-d H:i:s'))))
        ]);

        $userData = User::where(['email' => $req->Email])->get();

        foreach ($userData as $us) {
        }

        Mail::send(
            'mail.ForgotPasswordLink',
            array(
                'Email' => $req->Email,
                'Token' => $us->token
            ),
            function ($message) use ($req) {
                $message->from($req->Email);
                $message->to($req->Email, 'elbiheiry')->subject('Reset Link');
            }
        );

        return $this->index();
    }
}
