<?php

namespace App\Http\Api\Controllers;

use App\Models\Product;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'products' => 'required|string' // JSON string
        ]);

        $products = json_decode($request->products, true);

        if (!$products || !is_array($products)) {
            return response()->json(['error' => 'Invalid product selection'], 400);
        }

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('products', 'public');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('package'), $imageName);
        } else {
            return response()->json(['error' => 'Image upload failed'], 400);
        }

        // Create the package
        $package = Package::create([
            'name' => $request->en_name,
            'ar_name' => $request->ar_name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        // Attach products with quantities
        foreach ($products as $product) {
            $package->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        return response()->json(['message' => 'Package added successfully!', 'package' => $package], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
