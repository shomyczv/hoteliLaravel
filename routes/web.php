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

Route::get('/', 'App\Http\Controllers\HotelController@all');
Route::get('/{hotel}', 'App\Http\Controllers\HotelController@view');
Route::get('/{hotel}/{room}', 'App\Http\Controllers\RoomController@view');
Route::post('/add-reservation', 'App\Http\Controllers\ReservationController@create');

