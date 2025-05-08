<?php

namespace App\Http\Api\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
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
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('products', 'public');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('products'), $imageName);
        } else {
            if (app()->getLocale() === 'ar') {
                return response()->json(['error' => 'فشل تحميل الصورة'], 400);
            } else {
                return response()->json(['error' => 'Image upload failed'], 400);
            }
        }
        // dd($request->all);
        // Create Product
        $product = Product::create([
            'name' => $request->en_name,
            'ar_name' => $request->ar_name,
            'description' => $request->description,
            'ar_description' => $request->ar_description,
            'price' => $request->price,
            'image' => $imageName,
        ]);
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تمت إضافة المنتج بنجاح', 'product' => $product], 201);
        } else {
            return response()->json(['message' => 'Product added successfully', 'product' => $product], 201);
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
        App::setlocale($request->lang);
        $request->validate([
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'description' => 'required|string',
            'ar_description' => 'required|string',
            'price' => 'required|numeric',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('products', 'public');
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('products'), $imageName);
        }
        // dd($request->all);
        // Create Product
        $product = Product::find($request->product_id);
        $product->update([
            'name' => $request->en_name,
            'ar_name' => $request->ar_name,
            'description' => $request->description,
            'ar_description' => $request->ar_description,
            'price' => $request->price,
        ]);

        if ($request->hasFile('image')) {
            $product->update(['image' => $imageName]);
        }
        $product->save();
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تمت تعديل المنتج بنجاح', 'product' => $product], 201);
        } else {
            return response()->json(['message' => 'Product updated successfully', 'product' => $product], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $package = Product::find($request->product_id);

        if (!$package) {
            if (app()->getLocale() === 'ar') {
                return response()->json(['message' => 'لم يتم العثور على المنتج'], 404);
            }
            return response()->json(['message' => 'Product not found'], 404);
        }

        $package->delete();
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم حذف المنتج بنجاح']);
        }
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
