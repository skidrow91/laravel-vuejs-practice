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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group([
//     'middleware' => 'auth:api',
//     'prefix' => 'auth'
// ], function () {
//     Route::post('register', '\App\Http\Controllers\Auth\AuthController@register');
//     Route::post('login', '\App\Http\Controllers\Auth\AuthController@login');
//     Route::post('logout', '\App\Http\Controllers\Auth\AuthController@logout');
//     Route::post('refresh', '\App\Http\Controllers\Auth\AuthController@refresh');
//     Route::post('me', '\App\Http\Controllers\Auth\AuthController@me');
// });

Route::prefix('auth')->group(function(){
    Route::post('register', '\App\Http\Controllers\Auth\AuthController@register');
    Route::post('login', '\App\Http\Controllers\Auth\AuthController@login');

    // Route::group(['middleware' => 'jwt.auth.basic'], function(){
        Route::post('logout', '\App\Http\Controllers\Auth\AuthController@logout');
        Route::post('refresh', '\App\Http\Controllers\Auth\AuthController@refresh');
        Route::post('me', '\App\Http\Controllers\Auth\AuthController@me');
    // });
});


// Route::post('register', '\App\Http\Controllers\Auth\AuthController@register');
