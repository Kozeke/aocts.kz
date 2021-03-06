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

//document
Route::delete('user/delete/document', 'Api\UserDocumentController@deleteDocument');
Route::post('user/update/document', 'Api\UserDocumentController@updateDocument');
Route::post('user/add/document', 'Api\UserDocumentController@addDocument');
Route::get('user/download/document', 'Api\UserDocumentController@getDownload');


//edit personal information
Route::post('user/edit/main','Api\UserController@updateMain');
Route::post('user/edit/contacts','Api\UserController@updateContacts');
Route::post('user/edit/bank/requisites','Api\BankRequisitesController@update');
Route::delete('user/delete/bank/requisites', 'Api\BankRequisitesController@delete');

//update image
Route::post('user/edit/photo','Api\UserController@uploadImage');



Route::get('regions','RegionController@all');
Route::get('get/organization/type','TypeOfOrganizationController@all');

Route::post('forgot/password', 'ForgotPasswordController@forgot');
Route::get('forgot/password/get/code','ForgotPasswordController@getCode');
Route::post('send/file','Api\UserDocumentController@saveContract');

//application
Route::post('create/application','Api\ApplicationController@createApplication');
Route::get('application/self','Api\ApplicationController@self');

//agreement
Route::post('create/agreement','Api\AgreementController@create');

//payment
Route::post('make/payment','Api\PaymentHistoryController@make');
Route::post('transfer/money','Api\PaymentHistoryController@transferMoney');

//acts of completed work
Route::post('create/act','ActsOfCompletedWorkController@create');
Route::get('get/act','ActsOfCompletedWorkController@show');

