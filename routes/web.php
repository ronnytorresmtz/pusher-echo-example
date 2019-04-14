<?php

use App\User;
use App\Order;
use App\Events\ShippingStatusUpdated;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome2', function () {
    $order =  Order::where('order_id', 1)->first();
    $user = User::where('id', 1)->first();
    event(new ShippingStatusUpdated($user, $order));
    return view('welcome2');
});

 
