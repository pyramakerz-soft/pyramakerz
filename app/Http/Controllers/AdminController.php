<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
use App\Models\Products;
use App\Models\Promocode;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewPackages()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }
    public function viewProducts()
    {
        $products = Products::all();
        return view('admin.product.index', compact('products'));
    }
    public function viewPromos()
    {
        $promos = Promocode::all();
        return view('admin.promo.index', compact('promos'));
    }
    public function viewOrders()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function manageOrder($id)
    {
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }
    public function addProduct()
    {
        return view('admin.product.add_products');
    }
    public function editProduct($id)
    {
        $product = Products::findOrFail($id);
        return view('admin.product.edit_products', compact('product'));
    }
    public function editPackage($id)
    {
        $products = Products::all();
        $package = Package::findOrFail($id);
        return view('admin.package.edit_package', compact('package', 'products'));
    }
    public function addPackage()
    {
        $products = Products::all();
        return view('admin.package.add_package', compact('products'));
    }
    public function addPromo()
    {
        return view('admin.promo.add_promocode');
    }
}
