<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NewsLetterModel;

class NewsLetter extends Controller
{
    public function ValidateNewsLetter(Request $req)
    {
        $validation = $req->validate(
            [
                'NewsLetterEmail' => 'required|max:255|email|unique:newsletter,email',
            ],
            [
                'required' => 'Acest camp este obligatoriu',
                'email' => 'Adresa de email invalida',
                'unique' => 'Acest Email Deja A Fost Folosit'
            ]
        );

        if ($validation) {
            return $this->NewsLetterAddUser($req->input("NewsLetterEmail"));
        }

        return back();
    }
    public function NewsLetterAddUser($email)
    {
        $config = [
            'Products' => true,
            'StoreUpdate' => true
        ];
        $config = json_encode($config);

        $NewsLetter = new NewsLetterModel;
        $NewsLetter->id = uniqid();
        $NewsLetter->email = $email;
        $NewsLetter->config = $config;
        $NewsLetter->save();

        return back();
    }
}
