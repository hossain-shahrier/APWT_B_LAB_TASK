<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\User;
use App\Models\UserModel;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignupRequest $request)
    {
        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->user_name = $request->user_name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->address = $request->address;
        $customer->company_name = $request->company_name;
        $customer->phone = $request->phone_number;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->user_type = "active";
        $customer->date_added = "current_date";
        $customer->last_updated = "null";
        if ($request->password == $request->confirm_password) {
            $customer->save();
            return redirect()->route('account.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
