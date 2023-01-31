<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\productsTable;

class CartController extends Controller
{
    public function __construct()
    {
        $website_config = new website_configController;
        $website_config->website_config();

        return $this->DeliveryCost = $website_config->website_config->delivery_fee; // Ron
    }

    public function addToCart($productId)
    {
        // Check if the product exists in the database
        $product = productsTable::find($productId);
        if (!$product) {
            // Return an error if the product doesn't exist
            return back();
        }

        // Check if the product is already in the cart
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            // If the product is already in the cart, increment the quantity
            $cart[$productId]['quantity']++;
        } else {
            // If the product is not in the cart, add it with a quantity of 1
            $cart[$productId] = [
                'id' => $productId,
                'quantity' => 1
            ];
        }

        // Save the updated cart to the session
        session()->put('cart', $cart);

        return back();
    }

    public function RemoveFromCart($id)
    {
        $cart = session()->get('cart', []);

        foreach ($cart as $index => $item) {
            if ($item['id'] == $id) {
                unset($cart[$index]);
                session()->put('cart', $cart);
                break;
            }
        }
        return redirect()->back();
    }

    public function RemoveQuantity($id)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Find the product in the cart
        $product = array_column($cart, null, 'id')[$id];

        // Decrement the quantity by 1
        $product['quantity']--;

        // If the quantity is less than 1, remove the product from the cart
        if ($product['quantity'] < 1) {
            unset($cart[$id]);
        } else {
            // Update the product in the cart
            $cart[$id] = $product;
        }

        // Update the cart in the session
        session()->put('cart', $cart);

        return back();
    }

    public function AddQuantity($id)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Find the product in the cart
        $product = array_column($cart, null, 'id')[$id];

        // Increment the quantity by 1
        $product['quantity']++;

        // Update the product in the cart
        $cart[$id] = $product;

        // Update the cart in the session
        session()->put('cart', $cart);

        return back();
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
            $cupon = DB::table('coupons')->where('code', ['code' => session('cupon')])->get();

            foreach ($cupon as $cuponData) {
            }

            if (empty($cuponData)) {
                session()->put("cupon", null);
                return redirect(Request::url());
            }

            $total = $total - $total * ($cuponData->percentage / 100);
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
            $cuponD = $cuponData->percentage;
        }

        return $this->CartData = ["CartProducts" => $CartProducts, "order" => $order, "Cupon" => $cuponD];
    }


    public function cart(Request $req)
    {
        $this->GetCartData();
        return view("shopping-cart")->with(["CartProducts" => $this->CartData["CartProducts"], "OrderData" => $this->CartData["order"], "Cupon" => $this->CartData['Cupon']]); 
    }
}
