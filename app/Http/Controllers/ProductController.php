<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = customer::all();
        return view('product.index', compact('product'));
        
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_categori' => 'required|string|max:10',
            'product_name' => 'required|string|max200',
            'description' => 'required|string|max:25',
            'price' => 'required|string|max:15',
            'stock' => 'required|string|max:10',
        ]);

        Customer::create([
            'id_categori' => $request->id_categori,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index')->with('success', 'Product successfully registered.');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('customer'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'id_categori' => 'required|string|max:10',
            'product_name' => 'required|product|unique:product,product_name,' . $product->id,
            'description' => 'required|string|max:25',
            'price' => 'required|string|max:15',
            'stock' => 'required|string|max:10',
        ]);

        $customer->update([
            'id_categori' => $request->id_categori,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,

        ]);

        return redirect()->route('product.index')->with('success', 'Product successfully updated.');
    }
}