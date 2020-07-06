<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user.checkout');
    }
    public function succes(Request $request)
    {
        return view('pages.user.succes');
    }
}