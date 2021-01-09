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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('main');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details', 'HomeController@details')->name('details');
Route::get('/', 'RoomController@index')->name('main');
Route::resource('room','RoomController');
Route::resource('booking','BookingController')->middleware('auth');

