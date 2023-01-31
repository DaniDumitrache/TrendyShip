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
        //Valideaza codul cuponului
        $validation = $req->validate([
            'Cupon' => 'exists:coupons,code'
        ], [
            'exists' => 'Acest cupon nu exista!'
        ]);

        //Verifica daca validarea a returnat vreo eroare
        if (!$validation) {
            return redirect()->back()->withErrors($validation);
        }

        //Apeleaza functia pentru a aplica cuponul
        return $this->applyCupon($req->Cupon);
    }

    public function applyCupon($coupon)
    {
        //Verifica daca cuponul este valid si daca este activ
        $couponData = DB::table('coupons')->where([
            ['code', $coupon],
            ['status', true],
        ])->first();

        //daca cuponul nu exista sau nu este activ returneaza o eroare
        if (!$couponData) {
            return redirect()->back()->withErrors(['Cuponul nu este valid sau a expirat.']);
        }

        //seteaza o sesiune pentru a tine minte cuponul
        session()->put("cupon", $coupon);

        //Returneaza utilizatorul la ultima pagina
        return redirect()->back();
    }

    /*
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
*/
}
