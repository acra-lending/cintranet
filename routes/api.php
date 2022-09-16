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

Route::middleware('client_credentials')->prefix('v1')->group(function() {
    // Route::get('/user', function(Request $request) {
    //     return $request->user();
    // });

    // Route::get('/user/{user}', 'Admin\UsersController@show');
    // Route::apiResource('/users', 'UsersApiController', ['except' => ['create']]);

});

Route::get('/turntimes', 'TurnTimesController@index');
Route::get('/idl/turntimes', 'IDLTurnTimesController@index');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
