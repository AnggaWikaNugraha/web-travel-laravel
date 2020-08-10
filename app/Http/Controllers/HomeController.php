<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel_package;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = travel_package::with([
            'galleries'
        ])->get();
        return view('pages.user.home', [
            'items' => $items
        ]);
    }
}
