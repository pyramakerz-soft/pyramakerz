<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addProduct()
    {
        return view('admin.add_products');
    }
    public function addPackage()
    {
        $products = Products::all();
        return view('admin.add_package', compact('products'));
    }
}
