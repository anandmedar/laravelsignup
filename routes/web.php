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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/contact', 'App\Http\Controllers\TicketsController@create');
Route::post('/contact', 'App\Http\Controllers\TicketsController@store');
Route::get('/tickets', 'App\Http\Controllers\TicketsController@index');
Route::get('/ticket/{slug?}', 'App\Http\Controllers\TicketsController@show');
Route::get('/ticket/{slug?}/edit','App\Http\Controllers\TicketsController@edit');
Route::post('/ticket/{slug?}/edit','App\Http\Controllers\TicketsController@update');
Route::post('/ticket/{slug?}/delete','App\Http\Controllers\TicketsController@destroy');
Route::get('users/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'App\Http\Controllers\Auth\RegisterController@register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('users/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('users/login', 'App\Http\Controllers\Auth\LoginController@login');
