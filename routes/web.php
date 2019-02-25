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
    return view('welcome');
});

Auth::routes();

Route::get('/register', function () {
    abort(403);
});

Route::group(['middleware' => ['web','auth']], function() {
    Route::get('/home', function() {
        if(Auth::user()->role == 'user')
        {
            return view('layouts.user.user');
        } else {
            return view('layouts.admin.home');
        }
    });
});
