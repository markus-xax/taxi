<?php

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
    return view('home');
})->name('home');

Route::get('/sum', function () {
    return view('sum');
})->name('sum');

Route::get('/form/orderYes', function () {
    return view('orderY');
})->name('orderY');

Route::get('/home/driver', function () {
    return view('homeDriver');
})->name('homeDriver');

Route::get('/home/driver/LK', function () {
    return view('LK');
})->name('homeDriverLK');

Route::get('/home/driver/LK/reg', function () {
    return view('LKreg');
})->name('homeDriverLKreg');

Route::get('/mew', function () {
    return view('new');
})->name('new');

Route::get('/home/driver','\App\Http\Controllers\orderController@ordersAll' )->name('homeDriverAll');

Route::post('/form/orderYes', '\App\Http\Controllers\orderController@submit');

Route::post('/home/driver/LK/reg', '\App\Http\Controllers\driversController@registr');

Route::get('/go/{id}', '\App\Http\Controllers\OnController@On')->name('contactUp');

Route::get('/go/hum/{id}', '\App\Http\Controllers\PostOnController@IOn');




