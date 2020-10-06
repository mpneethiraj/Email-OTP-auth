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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('verify/resend', 'Auth\EmailOtpcontroller@resend')->name('verify.resend');
Route::resource('verify', 'Auth\EmailOtpcontroller')->only(['index', 'store']);
Auth::routes();
Route::group(['middleware' => ['auth', 'EmailOtpAuth']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});
