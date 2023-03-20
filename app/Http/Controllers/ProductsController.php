<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Http\Requests\ProductsUpdateRequest;
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

        return redirect()->route('home');
    }

    public function createForm()
    {
        return view('create');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('home');
    }

    public function update(Product $product, ProductsUpdateRequest $request)
    {
        $validated = $request->validated();

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $product->update($validated);

        return redirect()->route('home');
    }

    public function updateForm(Product $product)
    {
        return view('update', compact('product'));
    }
}
