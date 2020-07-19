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
Route::get('reset_password/{email}/{code}','ForgotPasswordController@reset');
Route::post('reset_password/{email}/{code}', 'ForgotPasswordController@resetPassword');
Route::get('/{any}', function(){
        return view('app');
})->where('any', '.*');
