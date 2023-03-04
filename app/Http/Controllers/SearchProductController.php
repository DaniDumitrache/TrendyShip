<?php

namespace App\Http\Controllers;

use App\Models\productsTable;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    public function Search(Request $req, $categoryes, $name)
    {
        if ($categoryes == "all") {
            $products = productsTable::where("Title", 'like', '%' . $name . '%')->get();
        } else {
            $products = productsTable::where("categoryes", '=', $categoryes)->orwhere("Title", 'like', '%' . $name . '%')->get();
        }

        return view("search")->with(['products' => $products]);
    }

    public function SearchMenu(Request $req)
    {
        return redirect()->route('search', ['categoryes' => $req->input('category'), 'productName' => $req->input('query')]);
    }
}
