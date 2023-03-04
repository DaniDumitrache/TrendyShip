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
use App\Http\Controllers\DeliveryAddressesController;
use App\Models\DeliveryAddresses;

class Checkout extends CartController
{
    public function CheckOut()
    {
        $this->GetCartData();

        return view('Checkout')->with([
            'CartProducts' => $this->CartData['CartProducts'],
            'OrderData' => $this->CartData['order'],
            'addresses' => DeliveryAddressesController::addresses(),
        ]);
    }

    public function store(Request $req)
    {
        $validation = $req->validate(
            [
                'adress_id' => ['required'],
            ],
            [
                'required' => 'Acest camp este obligatoriu',
                'email' => 'Adresa de email invalida',
                'regex' => 'Formatul numărului de telefon este incorect.',
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

        $addresses = DeliveryAddresses::where([
            'id' => $req->input('adress_id'),
        ])->first();

        $delivery = new Delivery();
        $delivery->OrderId = uniqid();
        $delivery->OrderBy = Auth::user()->email;
        $delivery->products = json_encode(session('cart'));
        $delivery->FullName = $addresses->full_name;
        $delivery->PhoneNumber = $addresses->phone_number;
        $delivery->County = $addresses->county;
        $delivery->local = $addresses->city;
        $delivery->adress = $addresses->address_line_1;
        $delivery->Delivery = $this->CartData['order']['DeliveryCost'];
        $delivery->SubTotal = $this->CartData['order']['ProductCost'];
        $delivery->Total = $this->CartData['order']['Total'];
        $delivery->save();

        session()->put('cart', []);
        session()->put('cupon', []);

        return response()->view('order.OrderConfirmed');
    }
}
