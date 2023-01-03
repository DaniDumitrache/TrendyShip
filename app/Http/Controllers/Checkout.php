<?php

/**
 * @author Dani Dumitrache
 */

namespace App\Http\Controllers;

use Infifni\FanCourierApiClient\Client;
use App\Models\Delivery;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class Checkout extends productsController
{
    public function store(Request $req)
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

        if (Auth::check()) {
            if ($validation) {
                return $this->AddDelivery($req);
            }
        }
    }

    public function AddDelivery($req)
    {
        $this->GetCartData();

        foreach (session('cart') as $items) {
            $cart_items = DB::table('products')->where('id', ['id' => $items])->get();

            foreach ($cart_items as $item) {
                if ($item->stock >= 1) {
                    $item_list[] = $item->id;
                }
            }
        }

        $delivery = new Delivery;
        $delivery->OrderId = uniqid("#");
        $delivery->OrderBy = Auth::user()->email;
        // $delivery->products = $item_list;
        $delivery->products = 1;
        $delivery->FullName = $req->input("LastNameAndFirstName");
        $delivery->PhoneNumber = $req->input("PhoneNumber");
        $delivery->County = $req->input("County");
        $delivery->local = $req->input("local");
        $delivery->adress = $req->input("Adress");
        $delivery->Delivery = $this->CartData["order"]["DeliveryCost"];
        $delivery->SubTotal = $this->CartData["order"]["ProductCost"];
        $delivery->Total = $this->CartData["order"]["Total"];
        $delivery->save();

        if ($req->has("RemberData")) {
            Customer::where('email', Auth::user()->email)
                ->update([
                    'name' => $req->input("LastNameAndFirstName"),
                    'Phone' => $req->input("PhoneNumber"),
                    'County' => $req->input("County"),
                    'local' => $req->input("local"),
                    'adress' => $req->input("Adress")
                ]);
        }

        (new Client('7032158', 'clienttest', 'testing'))
            ->order([
                'nr_colete' => 1,
                'pers_contact' => 'Test',
                'tel' => 123456789,
                'email' => 'example@example.com',
                'greutate' => 1,
                'inaltime' => 10,
                'lungime' => 10,
                'latime' => 10,
                'ora_ridicare' => '18:00',
                'observatii' => '',
                'client_exp' => 'Test',
                'strada' => 'Test',
                'nr' => 1,
                'bloc' => 2,
                'scara' => 3,
                'etaj' => 7,
                'ap' => 78,
                'localitate' => 'Constanta',
                'judet' => 'Constanta',
            ]);

        session()->put('cart', []);
        session()->put('cupon', []);

        return response()->view("order-completed");
    }
}
