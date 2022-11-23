<?php

namespace App\Http\Controllers;

use App\Models\productsTable;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    //
    public function GetProduct()
    {
        $Discounts = productsTable::all();
        $NewProducts = productsTable::orderBy('id', 'DESC')->get();

        return view('index')->with(['products' => $Discounts, 'NewProducts' => $NewProducts]);
    }

    public function AddToCart(Request $req, $id)
    {
        $products = productsTable::where('id', ['id' => $id, 'qnt' => 1])->get();

        if (count($products) == 1) {
            session()->push('cart', ['id' => $id, 'qnt' => 1]);
        }

        return session('cart');
    }

    public function RemoveFromCart(Request $req, $id)
    {
    }

    public function cart(Request $req)
    {
        if (empty(session("cart"))) {
            $id = [];
        } else {
            $id = session('cart');
        }
        $CartProducts = productsTable::whereIn('id', [$id])->get();

        $total = DB::table('products')->select(DB::raw('SUM(`Price` - `Price` * Discount / 100)'))->whereIn('id', [$id])->get();

        foreach ($total as $Total) {
            foreach ($Total as $data) {
            }
        }
        $Delivery = 20;

        $Total = $data + $Delivery;

        if ($data >= 200) {
            $SubTotal = $data - $Delivery;
        } else {
            $SubTotal = $data + $Delivery;
        }

        $order = [
            'Total' => $Total,
            'SubTotal' => $SubTotal,
            'Delivery' => $Delivery
        ];

        return view("shopping-cart")->with(["CartProducts" => $CartProducts, "OrderData" => $order]);
    }
}
