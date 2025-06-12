<?php

namespace App\Http\Api\Controllers;

use App\Models\Product;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

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
        App::setlocale($request->lang);
        $request->validate([
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'description' => 'required|string',
            'ar_description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'products' => 'required|string' // JSON string
        ]);

        $products = json_decode($request->products, true);

        if (!$products || !is_array($products)) {
            if (app()->getLocale() === 'ar') {
                return response()->json(['error' => 'اختيار المنتج غير صالح'], 400);
            } else {
                return response()->json(['error' => 'Invalid product selection'], 400);
            }
        }

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('products', 'public');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('package'), $imageName);
        } else {
            if (app()->getLocale() === 'ar') {
                return response()->json(['error' => 'فشل تحميل الصورة'], 400);
            } else {
                return response()->json(['error' => 'Image upload failed'], 400);
            }
        }

        // Create the package
        $package = Package::create([
            'name' => $request->en_name,
            'ar_name' => $request->ar_name,
            'description' => $request->description,
            'ar_description' => $request->ar_description,
            'price' => $request->price,
            'image' => $imageName,
            'bullets' => $request->bullets ? json_decode($request->bullets) : null,
            'ar_bullets' => $request->ar_bullets ? json_decode($request->ar_bullets) : null,
        ]);

        // Attach products with quantities
        foreach ($products as $product) {
            $package->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تمت إضافة الباقة بنجاح!', 'package' => $package], 201);
        } else {
            return response()->json(['message' => 'Package added successfully!', 'package' => $package], 201);
        }
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
    public function update(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'description' => 'required|string',
            'ar_description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'products' => 'required|string' // JSON string
        ]);

        $products = json_decode($request->products, true);

        if (!$products || !is_array($products)) {
            if (app()->getLocale() === 'ar') {
                return response()->json(['error' => 'اختيار المنتج غير صالح'], 400);
            } else {
                return response()->json(['error' => 'Invalid product selection'], 400);
            }
        }

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('products', 'public');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('package'), $imageName);
        }

        $package = Package::findOrFail($request->package_id);
        $package->update([
            'name' => $request->en_name,
            'ar_name' => $request->ar_name,
            'description' => $request->description,
            'ar_description' => $request->ar_description,
            'price' => $request->price,
            'bullets' => $request->bullets ? json_decode($request->bullets) : null,
            'ar_bullets' => $request->ar_bullets ? json_decode($request->ar_bullets) : null,
        ]);
        if ($request->hasFile('image')) {
            $package->update(['image' => $imageName]);
        }

        // Attach products with quantities
        foreach ($products as $product) {
            $package->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم تعديل الباقة بنجاح!', 'package' => $package], 201);
        } else {
            return response()->json(['message' => 'Package updated successfully!', 'package' => $package], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $package = Package::find($request->package_id);

        if (!$package) {
            if (app()->getLocale() === 'ar') {
                return response()->json(['message' => 'لم يتم العثور على الباقة'], 404);
            }
            return response()->json(['message' => 'Package not found'], 404);
        }

        $package->delete();
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم حذف الباقة بنجاح']);
        }
        return response()->json(['message' => 'Package deleted successfully']);
    }
}
