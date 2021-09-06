<?php

use App\Http\Controllers\NewsController;
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

Route::post('/create', 'App\Http\Controllers\NewsController@create');

Route::get('/delete', 'App\Http\Controllers\NewsController@delete');

Route::get('/news', 'App\Http\Controllers\NewsController@show');
