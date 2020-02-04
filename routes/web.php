<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! 101500378404
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'UserController@register');
Route::get('/login', 'UserController@login');
Route::get('/forgotPwd', 'UserController@forgotPwd')->name('ForgotPwd');
Route::get('/screenLock', 'UserController@screenLock');
Route::post('/createUser', 'UserController@createUser');
Route::post('/loginUser', 'UserController@loginUser');
Route::post('/forgotpwdUser', 'UserController@forgotpwdUser');
