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

//Authentication
Auth::routes();

//Dashboard
Route::get('/', 'HomeController@index')->name('home');

//Search Bar
Route::get('/search', 'SearchController@index')->middleware('auth');

//User Management
Route::namespace('Admin')->prefix('usermanagement')->name('admin.')->group(function(){
    Route::resource('/user', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Learning And Development
Route::get('learning/courses/fullcalendar', 'FullCalendarController@index')->name('index')->middleware('auth');
Route::resource('learning/announcements', 'AnnouncementPostsController')->middleware('auth');
Route::resource('learning/posts', 'LearningPostsController')->middleware('auth');
Route::get('learning/{file}', 'AnnouncementPostsController@view')->name('view')->middleware('auth');
Route::get('learning/courses/industryterms', 'IndustryTermsController@index')->middleware('auth');
Route::get('learning/courses/catalog', 'CourseCatalogController@index')->middleware('auth');

//Calendar Events
Route::get('loadevents', 'EventController@loadEvents')->name('routeLoadEvents')->middleware('auth');
Route::put('eventupdate', 'EventController@update')->name('routeEventUpdate')->middleware('auth');
Route::post('eventstore', 'EventController@store')->name('routeEventStore')->middleware('auth');
Route::delete('eventdelete', 'EventController@destroy')->name('routeEventDelete')->middleware('auth');
//Calendar Fast Events
Route::put('fasteventupdate', 'FastEventController@update')->name('routeFastEventUpdate')->middleware('auth');
Route::post('fasteventstore', 'FastEventController@store')->name('routeFastEventStore')->middleware('auth');
Route::delete('fasteventdelete', 'FastEventController@destroy')->name('routeFastEventDelete')->middleware('auth');

//Directory
Route::get('directory/directory', 'DirectoryController@index')->middleware('auth');
Route::get('usermanagement/profile/{id}', 'DirectoryController@show')->middleware('auth');
Route::get('directory/user/{id}', 'DirectoryController@show')->middleware('auth');

//Sales
Route::get('sales/data', function(){return view('pages.sales.data');})->middleware('auth');
Route::get('sales/forms', 'GeneralFormsCategoryController@index')->middleware('auth');
Route::get('sales/ratesheets', 'RatesheetCategoryController@index')->middleware('auth');
Route::get('sales/flyers', 'FlyersController@index')->middleware('auth');
Route::get('sales/documents', 'SalesDocumentsController@index')->middleware('auth');

//Operations
Route::get('operations/daily', function(){return view('pages.operations.daily');})->middleware('auth');
Route::get('operations/forms', 'OperationsFormsController@index')->middleware('auth');

//Servicing
Route::get('servicing/servicing', 'ServicingDocsController@index')->middleware('auth');

//Human Resources
Route::get('humanresources/mvp', function (){return view('pages.humanresources.mvp');})->middleware('auth');
Route::get('humanresources/paylocity', 'PaylocityController@index')->middleware('auth');
Route::get('humanresources/401k', 'Principal401kController@index')->middleware('auth');
Route::get('humanresources/health', 'HealthPlansController@index')->middleware('auth');
Route::get('humanresources/schedulesforms', 'SchedulesFormsController@index')->middleware('auth');
Route::get('humanresources/careers', 'CareersController@index')->middleware('auth');
Route::get('humanresources/stateposters', 'StatePostersController@index')->middleware('auth');

//File Upload
Route::get('mediamanager/files', function (){return view('pages.mediamanager.files');})->middleware('auth');
Route::get('mediamanager/upload', 'UploadController@index')->middleware('auth');
Route::post('uploads', 'UploadController@upload')->middleware('auth');
Route::put('update{id}', 'UploadController@update')->middleware('auth');
Route::delete('destroy{id}', 'UploadController@destroy')->middleware('auth');

//File download
Route::get('download/{file}', 'DownloadController@download')->name('download')->middleware('auth');
Route::get('download/{file}', 'DownloadController@show')->name('show')->middleware('auth');
Route::get('download/{id}/edit', 'DownloadController@edit')->middleware('auth');

//IT Ticket System
Route::get('infotech/ticket', function(){return view('pages.infotech.ticket');})->middleware('auth');

