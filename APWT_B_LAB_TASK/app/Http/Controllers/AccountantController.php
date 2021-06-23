<?php

namespace App\Http\Controllers;

use App\Models\Accountant;
use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function index()
    {

        $email = session()->get('email');
        $password = session()->get('password');
        $accountant = Accountant::where('email', $email)->where('password', $password)->first();
        if ($accountant) {
            return view('accountant.home')->with('email', $email);
        } else {
            return redirect('/login');
        }
    }
}
