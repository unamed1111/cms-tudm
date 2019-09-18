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
    return view('admin.index');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('login', function(){
        return view('admin.login');
    });
    Route::get('login', 'Admin\LoginController@showLoginPage')->name('admin.show-login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login');
});
