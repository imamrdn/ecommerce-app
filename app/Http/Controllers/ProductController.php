<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('dashboard.product.index', [
            'title' => 'Products',
            'desc' => 'List of products available in the system.',
            'products' => $products,
        ]);
    }


    public function create()
    {
        return view('dashboard.product.create', [
            'title' => 'Products',
            'desc' => 'List of products available in the system.',
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images');
            $validatedData['image'] = $imagePath;
        } else {
            $validatedData['image'] = 'image-product.jpg';
        }

        Product::create($validatedData);

        return redirect('/dashboard/products')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('dashboard.product.edit', [
            'title' => 'Products',
            'desc' => 'List of products available in the system.',
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images');
            $validatedData['image'] = $imagePath;
        }

        $product->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/dashboard/products')->with('success', 'Product deleted successfully!');
    }
}
