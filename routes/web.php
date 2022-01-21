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

// Route::get('/testpage', 'PublicController@jumboRateSheets');

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
Route::get('usermanagement/register', 'RegisterUsersController@index')->middleware('auth');
Route::post('usermanagement/register', 'RegisterUsersController@create')->middleware('auth');

Route::get('reports', 'ReportsController@index')->middleware('auth');
Route::get('reports2', 'ReportsController@index2')->middleware('auth');
Route::get('reports3', 'ReportsController@index3')->middleware('auth');
Route::get('reports4', 'ReportsController@index4')->middleware('auth');


//Videos
Route::get('/sales/videos', 'VideosController@sales')->middleware('auth');
Route::get('/monthlymeetings', 'VideosController@monthlymeetings')->middleware('auth');
Route::get('/operations/videos', 'VideosController@operations')->middleware('auth');
Route::get('/humanresources/videos', 'VideosController@humanresources')->middleware('auth');
Route::get('/infotech/videos', 'VideosController@infotech')->middleware('auth');
Route::get('/legal/videos', 'VideosController@legal')->middleware('auth');

//Learning And Development
Route::get('learning/courses/fullcalendar', 'FullCalendarController@index')->name('index')->middleware('auth');
Route::resource('learning/announcements', 'AnnouncementPostsController')->middleware('auth', \Spatie\HttpLogger\Middlewares\HttpLogger::class);
Route::resource('learning/posts', 'LearningPostsController')->middleware('auth', \Spatie\HttpLogger\Middlewares\HttpLogger::class);
Route::get('learning/guides', 'LearningGuidesController@index')->middleware('auth');
Route::get('learning/{file}', 'AnnouncementPostsController@view')->name('view')->middleware('auth');
Route::get('learning/courses/industryterms', 'IndustryTermsController@index')->middleware('auth');
Route::get('learning/courses/catalog', 'CourseCatalogController@index')->middleware('auth');

//Legal
Route::get('legal/documents', 'LegalController@index')->middleware('auth');

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
Route::post('sales/ratesheets', 'JumboPrimeRatesheetUpdateController@submit')->middleware('auth');
// Route::get('sales/submissions', 'SubmissionsController@index')->middleware('auth');
// Route::post('sales/submissions', 'SubmissionsController@update')->middleware('auth');
// Route::get('sales/videos', 'SalesDocumentsController@videos')->middleware('auth');

//Direct-To-Consumer
Route::get('consumerdirect/documents', 'DirectToConsumerController@index')->middleware('auth');
Route::get('consumerdirect/videos', 'VideosController@consumerDirect')->middleware('auth');


//Marketing
Route::get('marketing', 'MarketingController@index')->middleware('auth');
Route::post('marketing', 'MarketingController@submitForm')->middleware('auth');

//Operations
Route::get('operations/daily', function(){return view('pages.operations.daily');})->middleware('auth'); // Coming Soon
Route::get('operations/forms', 'OperationsFormsController@index')->middleware('auth');
Route::get('operations/processes', 'OperationsProcessesController@index')->middleware('auth');
Route::get('operations/usefullinks', 'UsefulLinksController@index')->middleware('auth');
Route::get('operations/usefullinks/create', 'UsefulLinksController@create')->middleware('auth');
Route::post('operations/usefullinks', 'UsefulLinksController@store')->middleware('auth');
Route::put('operations/usefullinks', 'UsefulLinksController@update')->middleware('auth');
Route::delete('operations/usefullinks/{id}', 'UsefulLinksController@destroy')->middleware('auth');

//Servicing
Route::get('servicing/documents', 'ServicingDocsController@index')->middleware('auth');
Route::get('servicing/tools', 'ServicingToolsController@index')->middleware('auth');

//Human Resources
Route::get('humanresources/mvp', function (){return view('pages.humanresources.mvp');})->middleware('auth');
Route::get('humanresources/paylocity', 'PaylocityController@index')->middleware('auth');
Route::get('humanresources/401k', 'Principal401kController@index')->middleware('auth');
Route::get('humanresources/health', 'HealthPlansController@index')->middleware('auth');
Route::get('humanresources/schedulesforms', 'SchedulesFormsController@index')->middleware('auth');
Route::get('humanresources/careers', 'CareersController@index')->middleware('auth');
Route::get('humanresources/stateposters', 'StatePostersController@index')->middleware('auth');
Route::get('humanresources/expensereport', 'ExpenseReportingController@index')->middleware('auth');
Route::get('humanresources/recruitment', 'SchedulesFormsController@recruitment')->middleware('auth');
Route::get('humanresources/documents', 'HRDocumentsController@index')->middleware('auth');

//Employee Status
Route::get('humanresources/employee/newhire', 'EmployeeNewHireController@index')->middleware('auth');
Route::get('humanresources/employee/statuschange', 'EmployeeStatusChangeController@index')->middleware('auth');
Route::get('humanresources/employee/outofoffice', 'EmployeeStatusReportController@create')->middleware('auth');
Route::get('humanresources/employee/termination', 'EmployeeTerminationController@index')->middleware('auth');
Route::post('humanresources/employee/newhire', 'EmployeeNewHireController@submit')->middleware('auth');
Route::post('humanresources/employee/statuschange', 'EmployeeStatusChangeController@submit')->middleware('auth');
Route::post('humanresources/employee/outofoffice', 'EmployeeStatusReportController@store')->middleware('auth');
Route::get('humanresources/employee/reminders', 'ReminderController@create')->middleware('auth');
Route::post('humanresources/employee/reminders', 'ReminderController@store')->middleware('auth');
Route::post('humanresources/employee/termination', 'EmployeeTerminationController@submit')->middleware('auth');
Route::post('humanresources/employee/involuntarytermination', 'EmployeeInvoluntaryTerminationController@submit')->middleware('auth');

//File Upload
Route::get('mediamanager/files', function (){return view('pages.mediamanager.files');})->middleware('auth');
Route::get('mediamanager/upload', 'UploadController@index')->middleware('auth');
Route::post('uploads', 'UploadController@upload')->middleware('auth');
Route::post('brokerloginrequest', 'UploadController@broker_login_request_parser')->middleware('auth');
Route::post('priorityloginrequest', 'UploadController@priority_login_request_parser')->middleware('auth');
Route::post('brokerloginrequestxlsx', 'UploadController@broker_portal_login_excel')->middleware('auth');
// Route::put('update{id}', 'UploadController@update')->middleware('auth');
Route::put('update', 'UploadController@update')->middleware('auth');
Route::delete('destroy{id}', 'UploadController@destroy')->middleware('auth');
Route::get('mediamanager/uploadjumbo', 'JumboRatesheetUploadController@index')->middleware('auth');
Route::post('mediamanager/uploadjumbo', 'JumboRatesheetUploadController@store')->middleware('auth');


//File download
Route::get('download/{file}', 'DownloadController@down')->name('download')->middleware('auth');
Route::get('download/{file}', 'DownloadController@view')->name('show')->middleware('auth');
Route::get('download/{id}/edit', 'DownloadController@edit')->middleware('auth');

//IT
Route::get('infotech/ticket', 'ITSupportController@index')->middleware('auth');
Route::post('infotech/submit', 'ITSupportController@submitForm')->middleware('auth');
Route::post('infotech/issues', 'ITSupportController@submitIssues')->middleware('auth');
Route::post('infotech/requests', 'ITSupportController@submitRequests')->middleware('auth');
Route::get('infotech/documents', 'ITSupportController@getDocuments')->middleware('auth');

//Excel Export
Route::get('/export', 'DirectoryExportController@export')->middleware('auth');
Route::get('/usermanagement/exports', 'DirectoryListController@index')->middleware('auth');




