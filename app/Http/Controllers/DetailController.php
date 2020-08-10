<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel_package;

class DetailController extends Controller
{
    public function index(Request $request , $slug)
    {
        $item = travel_package::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.user.detail' ,[
            'item' => $item
        ]);
    }
}
