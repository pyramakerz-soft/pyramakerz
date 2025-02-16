<?php

namespace App\Http\Controllers;

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
}
