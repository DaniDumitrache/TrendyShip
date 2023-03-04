<?php

namespace App\Http\Controllers;

use App\Models\productsTable;
use App\Models\Categoryes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\website_configController;

class productsController extends Controller
{
    public $order;

    public function __construct()
    {
        $website_config = new website_configController;
        $website_config->website_config();

        return $this->DeliveryCost = $website_config->website_config->delivery_fee; // Ron
    }
    public function GetProduct()
    {
        $this->GetCategoryes(5);
        $Discounts = productsTable::all();
        $NewProducts = productsTable::orderBy('id', 'DESC')->get();

        return view('index')->with(['products' => $Discounts, 'NewProducts' => $NewProducts, "categoryes" => $this->categoryes, "CategoryesProducts" => $this->CategoryesProducts]);
    }

    public function ProductPreview(Request $req, $ProductName, $id)
    {
        $Productn = implode(' ', explode('-', $ProductName));
        $product = productsTable::where(['Title' => $Productn, 'id' => $id])->get();

        foreach ($product as $pd) {
        }

        $this->RelatedProducts($pd->Title, $pd->categoryes);

        if (count($product) >= 1) {
            return view('ItemDetails')->with(['Product' => $product, 'RelatedProducts' => $this->RelatedProducts]);
        } else {
            abort(404);
        }
    }

    public function RelatedProducts($title, $categoryes)
    {
        $RelatedProducts = productsTable::where("Title", 'like', '%' . $title . '%')->orWhere("categoryes", 'like', '%' . $categoryes . '%')->take(4)->get();

        return $this->RelatedProducts = $RelatedProducts;
    }

    public function GetCategoryes(int $limit)
    {
        $categoryes = Categoryes::take($limit)->get();
        $CategoryesProducts = productsTable::all();

        return [$this->categoryes = $categoryes, $this->CategoryesProducts = $CategoryesProducts];
    }

    public function NewProducts()
    {
        $Discounts = productsTable::all();
        $NewProducts = productsTable::orderBy('id', 'DESC')->get();

        return view('LatestProducts')->with(['products' => $Discounts, 'NewProducts' => $NewProducts]);
    }

    
    public function GetFavoriteData()
    {
        if (empty(session("favorite"))) {
            $id = [0];
        } else {
            $id = session('favorite');
        }

        $CartProducts = productsTable::whereIn('id', $id)->get();

        return view("Favourites")->with(["FavoriteProducts" => $CartProducts]);
    }

  
    public function GetCartData()
    {

        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Retrieve the products from the database
        $CartProducts = productsTable::whereIn('id', array_column($cart, 'id'))->get();

        $total = 0;
        foreach ($CartProducts as $product) {
            // find the quantity from the session cart
            $product->quantity = array_column($cart, 'quantity', 'id')[$product->id];
            $total += $product->price * $product->quantity - $product->price * $product->discount / 100;
        }
        $subtotal = $total;

        if ($total >= 200) {
            $total -= $this->DeliveryCost;
        }

        $total = $total + $this->DeliveryCost;

        if (session('cupon')) {
            $cupon = DB::table('coupons')->where('coupon', ['coupon' => session('cupon')])->get();

            foreach ($cupon as $cuponData) {
            }

            if (empty($cuponData)) {
                session()->put("cupon", null);
                return redirect(Request::url());
            }

            $total = $total - $total * ($cuponData->Discount / 100);
        } else {
            $total = $total;
        }


        $ProductCost = $total;

        $order = [
            'Total' => intval($total),
            'ProductCost' => intval($subtotal),
            'DeliveryCost' => intval($this->DeliveryCost),
        ];

        if (!isset($cupon)) {
            $cuponD = [];
        } else {
            $cuponD = $cuponData->Discount;
        }

        return $this->CartData = ["CartProducts" => $CartProducts, "order" => $order, "Cupon" => $cuponD];
    }

    public function cart(Request $req)
    {
        $this->GetCartData();
        // return $this->CartData;
        return view("shopping-cart")->with(["CartProducts" => $this->CartData["CartProducts"], "OrderData" => $this->CartData["order"], "Cupon" => $this->CartData['Cupon']]);      // // $cart = session()->get('cart', []);
        // return $cart;
    }

    // Checkout
    public function CheckOut()
    {
        $this->GetCartData();
        return view("payment")->with([
            "CartProducts" => $this->CartData["CartProducts"],
            "OrderData" => $this->CartData["order"]
        ]);
    }
}
