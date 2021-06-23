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
Route::get('/logout', 'LogoutController@index');
Route::get('/signup', 'LoginController@signup');
Route::post('/signup', 'SignupController@store');
// Group Routes
Route::group(['middleware' => ['sess']], function () {

    Route::get('admin/home', 'AdminController@index')->middleware('sess');
    Route::get('customer/home', 'CustomerController@index')->middleware('sess');
    Route::get('accountant/home', 'AccountantController@index')->middleware('sess');
    Route::get('vendor/home', 'VendorController@index')->middleware('sess');
    Route::get('sell/home', 'SellController@index')->middleware('sess');
});
$chanel = "system/sales";
Route::get($chanel . "/physical_store", 'SellController@physical_store');
Route::get($chanel . "/social_media", 'SellController@social_media');
Route::get($chanel . "/ecommerce", 'SellController@ecommerce');
Route::get($chanel . "/physical_store/sales_log", 'SellController@sales_log');
Route::post($chanel . "/physical_store/sales_log", 'SellController@sales_log_store');
