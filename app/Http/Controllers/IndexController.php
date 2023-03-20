<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request)
    {
        $products = Products::query()->where('is_published', '>', '0');

        if ($request->get('query')) {
            $query = $request->get('query');
            $products = $products->where('title', 'LIKE', "%$query%");
        }

        $products = $products->get();

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
}
