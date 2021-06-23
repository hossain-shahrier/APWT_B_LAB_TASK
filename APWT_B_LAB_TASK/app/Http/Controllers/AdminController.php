<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $email = session()->get('email');
        $password = session()->get('password');
        $admin = Admin::where('email', $email)->where('password', $password)->first();
        if ($admin) {
            return view('admin.home')->with('email', $email);
        } else {
            return redirect('/login');
        }
    }
}
