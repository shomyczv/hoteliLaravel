<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('hotels', 'App\Http\Controllers\HotelController@getAll');
Route::get('hotels/{id}', 'App\Http\Controllers\HotelController@getById');
Route::get('rooms', 'App\Http\Controllers\RoomController@getAll');
Route::get('rooms/{id}', 'App\Http\Controllers\RoomController@getById');
Route::get('reservations', 'App\Http\Controllers\ReservationController@getAll');
Route::get('reservations/{id}', 'App\Http\Controllers\ReservationController@getById');
Route::post('rooms', 'App\Http\Controllers\RoomController@save');
Route::post('hotels', 'App\Http\Controllers\HotelController@save');
Route::post('reservations', 'App\Http\Controllers\ReservationController@save');
Route::delete('hotel/{id}', 'App\Http\Controllers\HotelController@delete');
Route::delete('room/{id}', 'App\Http\Controllers\RoomController@delete');
Route::delete('reservations/{id}', 'App\Http\Controllers\ReservationController@delete');

