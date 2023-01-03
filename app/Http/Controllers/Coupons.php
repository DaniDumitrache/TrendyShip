<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Coupons extends Controller
{
    //


    public function ValidateCupon(Request $req)
    {

        $validation = $req->validate(
            [
                'Cupon' => 'exists:coupons,coupon'
            ],
            [
                'exists' => 'Acest Cupon Nu Exista!'
            ]
        );

        if ($validation) {
            $this->SetCupon($req->input("Cupon"));
        }

        return back();
    }

    public function UnSetCupon()
    {
        session()->put('cupon', []);

        return back();
    }

    public function SetCupon($cupon)
    {
        session()->put('cupon', []);
        session()->push('cupon', $cupon);
    }
}
