<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsTable;

class FavoriteController extends Controller
{
    public function AddToFavorite($productId)
    {
        $product = productsTable::find($productId);
        if (!$product) {
            return back();
        }

        session()->put('favorite', [$productId]);

        return back();
    }

    public function removeFromFavorite($productId)
    {
        $favorites = session()->get('favorite');

        if (!$favorites) {
            return back();
        }

        $key = array_search($productId, $favorites);

        if ($key !== false) {
            unset($favorites[$key]);
            session()->put('favorite', $favorites);
        }

        return back();
    }
}
