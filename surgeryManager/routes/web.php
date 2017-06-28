<?php

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


Route::get('/', 'DashboardController@index')->name('home');

Route::get('/appointments', 'AppointmentController@index')->name('appointments');
Route::get('/appointments/create', 'AppointmentController@create')->name('appointments.create');
Route::post('/appointments', 'AppointmentController@store')->name('appointments.store');
Route::get('appointments/{appointment}', 'AppointmentController@show')->name('appointments.show');

Route::get('/places', 'PlaceController@index')->name('places');
Route::get('/places/create', 'PlaceController@create')->name('place.create');
Route::post('/places', 'PlaceController@store')->name('places.store');
Route::get('places/{place}', 'PlaceController@show')->name('places.show');
