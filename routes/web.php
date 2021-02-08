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
Route::get('/search/announcements', 'SearchController@show')->middleware('auth');

//User Management
Route::namespace('Admin')->prefix('usermanagement')->name('admin.')->group(function(){
    Route::resource('/user', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
Route::get('usermanagement/wp-users', 'WPUsersController@index')->middleware('auth');
// Route::get('usermanagement/brokerportalrequests', 'BrokerPortalRequestsController@index')->middleware('auth');
Route::post('usermanagement/brokerportalrequests', 'BrokerPortalRequestsController@submit')->middleware('auth');
Route::get('usermanagement/wpusers/edit/{id}', 'BrokerPortalRequestsController@edit')->middleware('auth');
Route::put('usermanagement/wpusers/edit/{id}', 'BrokerPortalRequestsController@update')->middleware('auth');
Route::delete('usermanagement/wpusers/edit/{id}', 'BrokerPortalRequestsController@destroy')->middleware('auth');

//Videos
Route::get('/videos/sales', 'VideosController@sales')->middleware('auth');
Route::get('/videos/monthlymeetings', 'VideosController@monthlymeetings')->middleware('auth');
Route::get('/videos/operations', 'VideosController@operations')->middleware('auth');

//Learning And Development
Route::get('learning/courses/fullcalendar', 'FullCalendarController@index')->name('index')->middleware('auth');
Route::resource('learning/announcements', 'AnnouncementPostsController')->middleware('auth', \Spatie\HttpLogger\Middlewares\HttpLogger::class);
Route::resource('learning/posts', 'LearningPostsController')->middleware('auth', \Spatie\HttpLogger\Middlewares\HttpLogger::class);
Route::get('learning/{file}', 'AnnouncementPostsController@view')->name('view')->middleware('auth');
Route::get('learning/courses/industryterms', 'IndustryTermsController@index')->middleware('auth');
Route::get('learning/courses/catalog', 'CourseCatalogController@index')->middleware('auth');
Route::get('learning/courses/guides', 'LearningGuidesController@index')->middleware('auth');

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
Route::get('sales/data', function(){return view('pages.sales.data');})->middleware('auth'); // Coming Soon
Route::get('sales/forms', 'GeneralFormsCategoryController@index')->middleware('auth');
Route::get('sales/ratesheets', 'RatesheetCategoryController@index')->middleware('auth');
Route::get('sales/flyers', 'FlyersController@index')->middleware('auth');
Route::get('sales/documents', 'SalesDocumentsController@index')->middleware('auth');

//Marketing
Route::get('marketing', 'MarketingController@index')->middleware('auth');
Route::post('marketing', 'MarketingController@submitForm')->middleware('auth');

//Operations
Route::get('operations/daily', function(){return view('pages.operations.daily');})->middleware('auth'); // Coming Soon
Route::get('operations/forms', 'OperationsFormsController@index')->middleware('auth');
Route::get('operations/usefullinks', 'UsefulLinksController@index')->middleware('auth');
Route::get('operations/usefullinks/create', 'UsefulLinksController@create')->middleware('auth');
Route::post('operations/usefullinks', 'UsefulLinksController@store')->middleware('auth');
Route::put('operations/usefullinks', 'UsefulLinksController@update')->middleware('auth');
Route::delete('operations/usefullinks/{id}', 'UsefulLinksController@destroy')->middleware('auth');

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
Route::get('humanresources/expensereport', 'ExpenseReportingController@index')->middleware('auth');

//Employee Status
Route::get('employee/newhire', 'EmployeeNewHireController@index')->middleware('auth');
Route::get('employee/statuschange', 'EmployeeStatusChangeController@index')->middleware('auth');
Route::get('employee/outofoffice', 'EmployeeStatusReportController@create')->middleware('auth');
Route::get('employee/termination', 'EmployeeTerminationController@index')->middleware('auth');
Route::post('employee/newhire', 'EmployeeNewHireController@submit')->middleware('auth');
Route::post('employee/statuschange', 'EmployeeStatusChangeController@submit')->middleware('auth');
Route::post('employee/outofoffice', 'EmployeeStatusReportController@store')->middleware('auth');
Route::post('employee/termination', 'EmployeeTerminationController@submit')->middleware('auth');

//File Upload
Route::get('mediamanager/files', function (){return view('pages.mediamanager.files');})->middleware('auth');
Route::get('mediamanager/upload', 'UploadController@index')->middleware('auth');
Route::post('uploads', 'UploadController@upload')->middleware('auth');
// Route::put('update{id}', 'UploadController@update')->middleware('auth');
Route::put('update', 'UploadController@update')->middleware('auth');
Route::delete('destroy{id}', 'UploadController@destroy')->middleware('auth');

//File download
Route::get('download/{file}', 'DownloadController@down')->name('download')->middleware('auth');
Route::get('download/{file}', 'DownloadController@view')->name('show')->middleware('auth');
Route::get('download/{id}/edit', 'DownloadController@edit')->middleware('auth');

//IT Ticket System
Route::get('infotech/ticket', 'ITSupportController@index')->middleware('auth');
Route::post('infotech/submit', 'ITSupportController@submitForm')->middleware('auth');
Route::post('infotech/issues', 'ITSupportController@submitIssues')->middleware('auth');
Route::post('infotech/requests', 'ITSupportController@submitRequests')->middleware('auth');

//Excel Export
Route::get('/export', 'DirectoryExportController@export')->middleware('auth');
Route::get('/usermanagement/exports', 'DirectoryListController@index')->middleware('auth');




