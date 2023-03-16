<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    Public function store(ProductsStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $product = Product::query()->create($validated);
    }

    public function createForm()
    {
        return view('products.create');
    }
}
