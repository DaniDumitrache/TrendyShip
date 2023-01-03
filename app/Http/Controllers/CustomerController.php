<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;
use App\Models\productsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //

    public function account()
    {
        if (!Auth::check()) {
            return back();
        }

        // return Auth::user();

        return view("account")->with(["Customer" => Auth::user()]);
    }

    public function GetOrderData()
    {
        $delivery = Delivery::where(["OrderBy" => Auth::user()->email])->get();

        return $this->delivery = $delivery;
    }

    public function order()
    {
        $this->GetOrderData();

        return view("account-order-history")->with(["Orders" => $this->delivery]);
    }

    public function orderDetalis(Request $req, $id)
    {
        $delivery = Delivery::where(["OrderId" => "#" . $id])->get();

        foreach ($delivery as $delivery) {
        }

        $DeliveryProducts = productsTable::whereIn('id', [$delivery->products])->get();

        return view("account-order-detalis")->with(["Order" => $delivery, "Products" => $DeliveryProducts]);
    }
}
