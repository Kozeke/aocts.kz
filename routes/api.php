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

Route::post('login', 'Api\Auth\LoginController@login');
Route::post('register', 'UserController@register');
Route::get('user/data', 'Api\Auth\LoginController@me');
Route::post('user/change/password', 'Api\Auth\LoginController@changePassword');
Route::delete('user/delete/document', 'Api\UserDocumentController@deleteDocument');

//edit personal information
Route::post('user/edit/main','Api\UserController@updateMain');
Route::post('user/edit/contacts','Api\UserController@updateContacts');
Route::post('user/edit/bank/requisites','Api\BankRequisitesController@update');



Route::get('regions','RegionController@all');
Route::post('forgot/password', 'ForgotPasswordController@forgot');
Route::get('forgot/password/get/code','ForgotPasswordController@getCode');
Route::post('send/file','Api\UserDocumentController@saveContract');

//application
Route::post('create/application','Api\ApplicationController@createApplication');
Route::get('application/self','Api\ApplicationController@self');

//agreement
Route::post('create/agreement','Api\AgreementController@create');

