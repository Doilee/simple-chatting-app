<?php

use Illuminate\Http\Request;

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

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('register', 'Auth\RegisterController@register');

Route::post('password/create', 'Auth\ResetPasswordController@create');
Route::get('password/find/{token}', 'Auth\ResetPasswordController@find');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['middleware' => 'auth:api'], function() {
    // Hit this endpoint to check if you're logged in
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Show last 10 messages
    Route::get('/message/history/{friend}', 'MessageController@history');

    // Send a message to a friend :)
    Route::post('/message/{friend}', 'MessageController@send');
});