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

Route::get('/', 'LoginController@index')->name('formLogin');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/dashboard', 'LoginController@dashboard')->name('dashboard');

//Rota dos emails
Route::get('/dashboard/enviados', 'EmailController@enviados')->name('email.enviados');
Route::get('/dashboard/novo', 'EmailController@novo')->name('email.novo');
Route::post('/dashboard/novo', 'EmailController@adicionar')->name('email.add');

