<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view('index');
    }
    public function login() {
        return view('login');
    }
    public function cart() {
        return view('cart');
    }
    public function signup() {
        return view('signup');
    }
    public function checkout() {
        return view('checkout');
    }
    public function product_type() {
        return view('product_type');
    }
    public function produtc() {
        return view('product');
    }
    public function contacts() {
        return view('contacts');
    }
    public function err() {
        return view('err');
    }
    public function about() {
        return view('about');
    }
    public function pricing() {
        return view('pricing');
    }
}
