<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request)
    {
        $products = Product::query();

        if ($request->get('query')) {
            $query = $request->get('query');
            $products = $products->where('title', 'LIKE', "%$query%");
        }

        $products = $products->paginate(9)->withQueryString();

        return view('home', [
            'products' => $products
        ]);
    }

    public function signUp()
    {
        return view('signUp');
    }

    public function signIn()
    {
        return view('signIn');
    }

//    public function createForm()
//    {
//        return view('createForm');
//    }
}
