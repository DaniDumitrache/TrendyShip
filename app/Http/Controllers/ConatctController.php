<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConatctController extends Controller
{
    //

    public function store(Request $req)
    {
        $validation = $req->validate(
            [
                'FirstName' => 'required|max:255',
                'LastName' => 'required|max:255',
                'Email' => 'required|max:255|email',
                'Subject' => 'required|max:255',
                'message' => 'required|max:255'
            ],
            [
                'required' => 'Acest camp este obligatoriu',
                'email' => 'Adresa de email invalida'
            ]
        );

        if ($validation) {
            return $this->SendMessage($req);
        }
    }

    public function SendMessage($req)
    {
        Mail::send(
            'mail.ContactMail',
            array(
                'FirstName' => $req->FirstName,
                'LastName' => $req->LastName,
                'Email' => $req->Email,
                'Message' => $req->message
            ),
            function ($message) use ($req) {
                $message->from('daniromaniahd@gmail.com');
                $message->to('daniromaniahd@gmail.com', 'elbiheiry')->subject($req->Subject);
            }
        );

        return back();
    }
}
