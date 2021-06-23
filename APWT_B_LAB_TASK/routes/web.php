<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@login')->name('account.login');
Route::post('/login', 'LoginController@verify');
// Group Routes
Route::group(['middleware' => ['sess']], function () {
    Route::get('admin/home', 'AdminController@index')->middleware('sess');
    Route::get('customer/home', 'CustomerController@index')->middleware('sess');
    Route::get('accountant/home', 'AccountantController@index')->middleware('sess');
    Route::get('vendor/home', 'VendorController@index')->middleware('sess');
    Route::get('sell/home', 'SellController@index')->middleware('sess');
});
