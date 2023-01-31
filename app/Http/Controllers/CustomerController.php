<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;
use App\Models\productsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\adminController;

class CustomerController extends Controller
{

    public function account()
    {
        if (!Auth::check()) {
            return back();
        }

        $this->RecentOrder();
        $this->GetTotalOrder();
        $admin = new adminController;
        $GroupPermission = $admin->GetGroupPermission();

        return view("account")->with(["Customer" => Auth::user(), "RecentOrders" => $this->RecentOrders, "TotalOrders" => $this->TotalOrder, "admin" => $admin->CheckIsAdmin(), "GroupPermission" => $GroupPermission]);
    }

    public function order()
    {
        $delivery = Delivery::where(["OrderBy" => Auth::user()->email])->get();

        return view("account-order-history")->with(["Orders" => $delivery]);
    }

    public function RecentOrder()
    {
        $RecentOrders = DB::table('delivery')->latest()->where(["OrderBy" => Auth::user()->email])->take(2)->get();

        return $this->RecentOrders = $RecentOrders;
    }

    public function GetTotalOrder()
    {
        $TotalOrder = DB::table('delivery')->where(["OrderBy" => Auth::user()->email])->count();

        return $this->TotalOrder = $TotalOrder;
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
