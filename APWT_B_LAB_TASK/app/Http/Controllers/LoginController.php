<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Accountant;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Sell;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('account.login');
    }
    public function verify(UserRequest $request)
    {
        $admin = Admin::where('email', $request->email)->where('password', $request->password)->first();
        $customer = Customer::where('email', $request->email)->where('password', $request->password)->first();
        $accountant = Accountant::where('email', $request->email)->where('password', $request->password)->first();
        $vendor = Vendor::where('email', $request->email)->where('password', $request->password)->first();
        $sell = Sell::where('email', $request->email)->where('password', $request->password)->first();
        if ($admin) {
            session()->put('username', $admin['user_name']);
            $request->session()->put('email', $request->email);
            $request->session()->put('password', $request->password);
            return redirect('/admin/home');
        } else if ($customer) {
            session()->put('username', $customer['user_name']);
            $request->session()->put('email', $request->email);
            $request->session()->put('password', $request->password);
            return redirect('/customer/home');
        } else if ($accountant) {
            session()->put('username', $accountant['user_name']);
            $request->session()->put('email', $request->email);
            $request->session()->put('password', $request->password);
            return redirect('/accountant/home');
        } else if ($vendor) {
            session()->put('username', $vendor['user_name']);
            $request->session()->put('email', $request->email);
            $request->session()->put('password', $request->password);
            return redirect('/vendor/home');
        } else if ($sell) {
            session()->put('username', $sell['user_name']);
            $request->session()->put('email', $request->email);
            $request->session()->put('password', $request->password);
            return redirect('/sell/home');
        } else {
            $request->session()->flash('msg', 'invaild email or password');
            return redirect('/login');
        }
    }
}
