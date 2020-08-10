<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\travel_package;
use Illuminate\Http\Request;
use App\Transaction;

class DasboardController extends Controller
{
    public function index(Request $request){
          return view('pages.admin.dasboard', [
              'travel_package' => travel_package::count(),
              'transaction' => Transaction::count(),
              'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
              'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()
          ]);
    }
}
