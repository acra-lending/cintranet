<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| SCIM Routes
|--------------------------------------------------------------------------
|
| Here is where you can register SCIM routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your SCIM!
|
*/

Route::middleware('client_credentials', 'request.logging')->prefix('v2')->group(function() {
    // Route::get('/user', function(Request $request) {
    //     return $request->user();
    // });

    // Route::get('/user/{user}', 'Admin\UsersController@show');
    // Route::apiResource('/Users', 'UsersApiController', ['except' => ['create']]);
    Route::get('Users', 'UsersApiController@index')->name('api.user.index');
    Route::get('Groups', 'GroupsApiController@index')->name('api.group.index');

    Route::get('Users/{id}', 'UsersApiController@show')->name('api.user.get');

    Route::post('Users', 'UsersApiController@store')->name('api.user.create');

    Route::put('Users/{id}', 'UsersApiController@replace')->name('api.user.replace');

    Route::patch('Users/{id}', 'UsersApiController@update')->name('api.user.update');

});




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
