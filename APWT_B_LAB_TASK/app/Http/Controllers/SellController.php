<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleLogRequest;
use App\Models\PhysicalStoreChanel;
use App\Models\Sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function physical_store()
    {
        $current = DB::table('physical_store_channel')->pluck('current_date');
        foreach ($current as $value) {
            $current_date = $value;
        }
        session()->put('current_date', $current_date);
        $last_seven = DB::table('physical_store_channel')->pluck('last_seven_days');
        foreach ($last_seven as $value) {
            $last_seven_days = $value;
        }
        session()->put('last_seven_days', $last_seven_days);
        $avgsales = DB::table('physical_store_channel')->pluck('avg_sales');
        foreach ($avgsales as $value) {
            $avg_sales = $value;
        }
        session()->put('avg_sales', $avg_sales);
        $maxsold = DB::table('physical_store_channel')->pluck('max_sold');
        foreach ($maxsold as $value) {
            $max_sold = $value;
        }
        session()->put('max_sold', $max_sold);
        return view('sell.physical_store_chanel')->with('current_date', $current_date)->with('last_seven_days', $last_seven_days)->with('avg_sales', $avg_sales)->with('max_sold', $max_sold);
    }
    public function sales_log()
    {
        return view('sell.sales_log');
    }
    public function sales_log_store(SaleLogRequest $request)
    {

        $physical_store_channel = new  PhysicalStoreChanel();
        $physical_store_channel->customer_name = $request->customer_name;
        $physical_store_channel->address = $request->address;
        $physical_store_channel->phone = $request->phone;
        $physical_store_channel->product_id = $request->product_id;
        $physical_store_channel->product_name = $request->product_name;
        $physical_store_channel->unit_price = $request->unit_price;
        $physical_store_channel->quantity = $request->quantity;
        $physical_store_channel->total_price = $request->total_price;
        $physical_store_channel->date_sold = "current_date";
        $physical_store_channel->payment_type = "cash/card/onine";
        $physical_store_channel->status = "sold";
        $physical_store_channel->save();
        return redirect()->route('sell.home');
    }
}
