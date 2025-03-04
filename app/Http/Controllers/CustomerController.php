<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
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
        return view('customer.blog.blog');
    }
    public function blogs1()
    {
        return view('customer.blog.blog-detail1');
    }
    public function blogs2()
    {
        return view('customer.blog.blog-detail2');
    }
    public function blogs3()
    {
        return view('customer.blog.blog-detail3');
    }
    public function schools()
    {
        return view('customer.schools.schools');
    }
    public function students()
    {
        return view('customer.student.indexb2c');
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
        // Fetch all packages with their associated products
        $plans = Package::with('products')->get();
        return view('customer.package.packages', compact('plans'));
    }

    public function account()
    {
        return view('customer.auth.account');
    }
    public function customizePackage()
    {
        $products = Product::all();
        return view('customer.package.customize_package', compact('products'));
    }
}
