<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request)
    {
        $products = Products::query()->where('is_published', '>', '0')->get();

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
