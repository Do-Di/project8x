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
    return view('welcome');
});
Route::get('/login','App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login','App\Http\Controllers\LoginController@authenticate')->name('login.authenticate');
Route::get('/admin',function ()
{
    return view('admin');
})->name('admin.index')->middleware('auth');
Route::get('checkLog','App\Http\Controllers\LoginController@checkLog')->name('checkLog');


