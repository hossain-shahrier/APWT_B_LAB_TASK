<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index()
    {

        $email = session()->get('email');
        $password = session()->get('password');
        $sell = Sell::where('email', $email)->where('password', $password)->first();
        if ($sell) {
            return view('sell.home')->with('email', $email);
        } else {
            return redirect('/login');
        }
    }
}
