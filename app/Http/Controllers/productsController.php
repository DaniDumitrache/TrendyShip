<?php

namespace App\Http\Controllers;

use App\Models\productsTable;
use App\Models\Categoryes;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class productsController extends Controller
{
    public $order;
    public $DeliveryCost = 20;
    //
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
            return view('product-view')->with(['Product' => $product, 'RelatedProducts' => $this->RelatedProducts]);
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

        return view('NewProducts')->with(['products' => $Discounts, 'NewProducts' => $NewProducts]);
    }

    // Favorite
    public function AddToFavorite(Request $req, $id)
    {
        $products = productsTable::where('id', ['id' => $id])->get();

        $items = Session::get('favorite', []);


        if (!isset($items[array_search($id, $items)])) {
            if (count($products) == 1) {
                session()->push('favorite', $id);
            }
        }

        return back();
    }

    public function RemoveFromFavorite(Request $req, $id)
    {
        $items = Session::get('cart', []);

        if (($key = array_search($id, $items)) !== false) {
            unset($items[$key]);
        }

        Session::put('cart', $items);

        return back();
    }

    public function GetFavoriteData()
    {
        if (empty(session("favorite"))) {
            $id = [0];
        } else {
            $id = session('favorite');
        }

        $CartProducts = productsTable::whereIn('id', $id)->get();

        return view("wish-list")->with(["FavoriteProducts" => $CartProducts]);
    }

    public function MoveToFavorite(Request $req, $id)
    {

        if (!session()->has('favorite')) {
            session()->put('favorite', []);
        }

        $FavoriteItems = Session::get('favorite', []);
        $CartItems = Session::get('cart', []);

        if (($FavoriteKey = array_search($id, $FavoriteItems)) !== true && ($CartKey = array_search($id, $CartItems)) !== false) {
            unset($CartItems[$CartKey]);

            Session::put('cart', $CartItems);
            session()->push('favorite', $id);
        }

        return back();
    }

    // Cart
    public function AddToCart(Request $req, $id)
    {
        $products = productsTable::where('id', ['id' => $id])->get();
        $items = Session::get('cart', []);


        if (!isset($items[array_search($id, $items)])) {
            if (count($products) == 1) {
                session()->push('cart', $id);
            }
        }

        return back();
    }

    public function RemoveFromCart(Request $req, $id)
    {
        $items = Session::get('cart', []);

        if (($key = array_search($id, $items)) !== false) {
            unset($items[$key]);
        }

        Session::put('cart', $items);

        return back();
    }

    public function GetCartData()
    {
        if (empty(session("cart"))) {
            $id = ["0"];
        } else {
            $id = session('cart');
        }

        $CartProducts = productsTable::whereIn('id', [$id])->get();

        $total = DB::table('products')->select(DB::raw('SUM(`Price` - `Price` * Discount / 100)'))->whereIn('id', [$id])->where('stock', '>=', '1')->get();

        foreach ($total as $Total) {
            foreach ($Total as $data) {
            }
        }

        if ($data >= 200) {
            $Total = $data + $this->DeliveryCost;
        }

        if (session('cupon')) {
            $cupon = DB::table('coupons')->where('coupon', ['coupon' => session('cupon')])->get();

            foreach ($cupon as $cuponData) {
            }

            $Total = $data - $data * ($cuponData->Discount / 100);
        } else {
            $Total = $data;
        }

        $ProductCost = $data;

        $order = [
            'Total' => intval($Total),
            'ProductCost' => intval($ProductCost),
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
        return view("shopping-cart")->with(["CartProducts" => $this->CartData["CartProducts"], "OrderData" => $this->CartData["order"], "Cupon" => $this->CartData['Cupon']]);
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
