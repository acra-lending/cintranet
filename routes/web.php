<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.dashboard');
});

Route::get('learning/announcements', function () {
    return view('pages.learning.announcements');
});

Route::get('learning/announcements2', function () {
    return view('pages.learning.announcements2');
});

Route::get('learning/announcements3', function () {
    return view('pages.learning.announcements3');
});

Route::get('learning/building', function (){
    return view('pages.learning.building');
});

// Route::get('usermanagement/profile', function () {
//     return view('pages.usermanagement.profile');
// });

// Route::get('directory/directory', function (){
//     return view('pages.directory.directory');
// });

Route::get('directory/directory', 'DirectoryController@index');
Route::get('usermanagement/{id}', 'DirectoryController@show');

Route::get('sales/data', function () {
    return view('pages.sales.data');
});

Route::get('sales/forms', function (){
    return view('pages.sales.forms');
});

Route::get('sales/ratesheets', 'CategoryController@index');


Route::get('sales/flyers', function (){
    return view('pages.sales.flyers');
});


Route::get('operations/daily', function (){
    return view('pages.operations.daily');
});

Route::get('servicing/servicing', function () {
    return view('pages.servicing.servicing');
});

Route::get('humanresources/mvp', function (){
    return view('pages.humanresources.mvp');
});

Route::get('humanresources/paylocity', function (){
    return view('pages.humanresources.paylocity');
});

Route::get('mediamanager/files', function (){
    return view('pages.mediamanager.files');
});

Route::get('mediamanager/upload', function(){
    return view('pages.mediamanager.upload');
});

Route::post('uploads', 'UploadController@upload');

Route::get('infotech/ticket', function(){
    return view('pages.infotech.ticket');
});


