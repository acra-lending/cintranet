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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

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

Route::get('directory/directory', 'DirectoryController@index')->middleware('auth');
Route::get('usermanagement/{id}', 'DirectoryController@show')->middleware('auth');

Route::get('sales/data', function () {
    return view('pages.sales.data');
})->middleware('auth');

Route::get('sales/forms', 'GeneralFormsCategoryController@index')->middleware('auth');

Route::get('sales/ratesheets', 'RatesheetCategoryController@index')->middleware('auth');


Route::get('sales/flyers', 'FlyersController@index')->middleware('auth');

Route::get('sales/documents', function(){
    return view('pages.sales.documents');
})->middleware('auth');


Route::get('operations/daily', function (){
    return view('pages.operations.daily');
})->middleware('auth');

Route::get('operations/forms', function (){
    return view('pages.operations.forms');
})->middleware('auth');

Route::get('servicing/servicing', function () {
    return view('pages.servicing.servicing');
})->middleware('auth');

Route::get('humanresources/mvp', function (){
    return view('pages.humanresources.mvp');
})->middleware('auth');

Route::get('humanresources/paylocity', function (){
    return view('pages.humanresources.paylocity');
})->middleware('auth');

Route::get('mediamanager/files', function (){
    return view('pages.mediamanager.files');
})->middleware('auth');

Route::get('mediamanager/upload', function(){
    return view('pages.mediamanager.upload');
})->middleware('auth');

Route::post('uploads', 'UploadController@upload')->middleware('auth');

Route::get('download/{file}', 'DownloadController@download')->name('download')->middleware('auth');
Route::get('download/{file}', 'DownloadController@show')->name('show')->middleware('auth');

Route::get('infotech/ticket', function(){
    return view('pages.infotech.ticket');
})->middleware('auth');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

    
});