<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Product::create($request->validate([
            'name' => 'required',
            'stock_quantity' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'nullable|exists:categories,id'
        ]));

        return redirect()->route('products.index')->with('success', 'Ürün eklendi!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->validate([
            'name' => 'required',
            'stock_quantity' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'nullable|exists:categories,id'
        ]));

        return redirect()->route('products.index')->with('success', 'Ürün güncellendi!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Ürün silindi!');
    }
}

