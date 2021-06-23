<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $email = session()->get('email');
        $password = session()->get('password');
        $customer = Vendor::where('email', $email)->where('password', $password)->first();
        if ($customer) {
            return view('vendor.home')->with('email', $email);
        } else {
            return redirect('/login');
        }
    }
}
