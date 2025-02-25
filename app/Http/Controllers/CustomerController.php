<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function blogs()
    {
        return view('customer.blog');
    }
    public function blogs1()
    {
        return view('customer.blog-detail1');
    }
    public function blogs2()
    {
        return view('customer.blog-detail2');
    }
    public function blogs3()
    {
        return view('customer.blog-detail3');
    }
    public function schools()
    {
        return view('customer.schools');
    }
    public function students()
    {
        return view('customer.indexb2c');
    }
    public function competitions()
    {
        return view('customer.competition-soon');
    }
    public function alefBot()
    {
        return view('customer.coming-soon');
    }

    public function login()
    {
        return view('customer.auth.login');
    }

    public function register()
    {
        return view('customer.auth.register');
    }
    public function verifyOTP()
    {
        return view('customer.auth.verify-otp');
    }
    public function packages()
    {
        // Fetch all products (or filter based on specific plans)
        $products = Product::all();

        // Define plans and assign relevant products
        $plans = [
            'Bronze' => Product::whereIn('id', [1, 2, 9])->get(),
            'Silver' => Product::whereIn('id', [3, 4, 5])->get(),
            'Gold' => Product::whereIn('id', [6, 7, 8])->get(),
        ];
        // $orders = Order::where('user_id', 20)
        //     ->with('products')
        //     ->get();
        // dd($orders);


        return view('customer.packages', compact('plans'));
    }
    public function account()
    {
        return view('customer.auth.account');
    }
    public function customizePackage()
    {
        $products = Product::all();
        return view('customer.customize_package', compact('products'));
    }
}
