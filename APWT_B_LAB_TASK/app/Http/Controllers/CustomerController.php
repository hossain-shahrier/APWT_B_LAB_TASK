<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $email = session()->get('email');
        $password = session()->get('password');
        $customer = Customer::where('email', $email)->where('password', $password)->first();
        if ($customer) {
            return view('customer.home')->with('email', $email);
        } else {
            return redirect('/login');
        }
    }
}
