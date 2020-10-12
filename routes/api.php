<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('user/data', 'UserController@userData');
Route::post('user/change/password', 'UserController@changePassword');
Route::delete('user/delete/document', 'UserDocumentController@deleteDocument');


Route::post('user/edit/main','UserController@updateMain');
Route::post('user/edit/contacts','UserController@updateContacts');



Route::get('regions','RegionController@all');
Route::post('forgot/password', 'ForgotPasswordController@forgot');
Route::get('forgot/password/get/code','ForgotPasswordController@getCode');
Route::post('send/file','UserDocumentController@saveContract');


