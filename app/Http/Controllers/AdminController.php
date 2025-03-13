<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function viewPackages()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }
    public function addProduct()
    {
        return view('admin.add_products');
    }
    public function addPackage()
    {
        $products = Products::all();
        return view('admin.package.add_package', compact('products'));
    }
    public function addPromo()
    {
        return view('admin.add_promocode');
    }
}
