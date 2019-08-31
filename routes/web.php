<?php


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
    return view('welcome');
});

/*

  1. GET   /projects        (index)           // -- show content
  2. GET   /projects/create (create)          // -- create file
  3. GET   /projects/1      (show)            // -- retrive data based on unique id
  4. POST  /projects        (store)           // -- save
  5. GET   /projects/1/edit (edit)            // -- edit data based on id
  6. PATCH /projects/1      (update)          // -- update based on id
  7. DELET /projects/1      (destroy)         // -- delete data based


*/

// -- automatic/shorcut of creating Routes (convention)
Route::resource('projects', 'ProjectController');
//Route::resource('tasks', 'TaskController');

Route::patch('/tasks/{task}', 'TaskController@update');
Route::post('/projects/{project}/tasks', 'TaskController@store');

// Route::resource('employees', 'EmployeeController');
Route::resource('employees', 'EmployeeController')->middleware('auth');
//Route::patch('/employees/{employee}', 'EmployeeController@update');

//Route::patch('/employees/{employee}', 'EmployeeController@update');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/payroll', 'PayrollController@index');
Route::post('/payroll/post', 'PayrollController@calculate');

// -- email
Route::get('/sendemail', 'SendEmailController@index')->name('sendemail.index');
Route::post('/sendemail/send', 'SendEmailController@send');

// -- sms
Route::get('/sms', 'SmsController@index')->name('sms.index');
Route::post('/sms', 'SmsController@send');
// Route::get('/sms/msg91', 'SmsController@Msg91');

// -- sss -> payroll directory
Route::get('/sss', 'Payroll_dir\PayrollDirectoryController@index')->name('sss');
// Route::get('/sss/{appl_prd}', 'Payroll_dir\PayrollDirectoryController@getAjax');
// Route::get('/sss', ['as'=>'get.data','uses'=>'Payroll_dir\PayrollDirectoryController@getAjax']);
Route::get('sss/{appl_prd}','Payroll_dir\PayrollDirectoryController@getAjax')->name('get.data');
Route::get('sss/print/{payr_dir}', 'Payroll_dir\PayrollDirectoryController@search_contributaion')->name('sss_contri');
// Route::get('sss/getdata', ['as' => 'get.data', 'uses' => 'Payroll_dir\PayrollDirectoryController@getAjax']);
// Route::get('sss/getdata', array('as' => 'get.data', 'uses' => 'Payroll_dir\PayrollDirectoryController@getAjax'));
// Route::controller('sss', 'Payroll_dir\PayrollDirectoryController', [
    // 'getAjax' => 'get.data']);

// -- Manual adding of routes
// Route::get('/projects', 'ProjectController@index');
//
// Route::get('/projects/create', 'ProjectController@create');
//
// Route::get('/projects/{project}', 'ProjectController@show');
//
// Route::post('/projects', 'ProjectController@store');
//
// Route::get('/projects/{project}', 'ProjectController@edit');
//
// Route::patch('/projects/{project}', 'ProjectController@update');
//
// Route::delete('/projects/{project}', 'ProjectController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
