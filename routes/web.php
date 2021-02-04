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
    return view('welcome');
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'super_admin']], function() {

   /// Route::Resource('super-admin','SuperAdmin');

   Route::Resource('super_admin','App\Http\Controllers\super_admin\SuperAdminController');
   Route::Resource('region','App\Http\Controllers\super_admin\RegionController');
   Route::Resource('region_list','App\Http\Controllers\super_admin\RegionListController');
   Route::Resource('organization','App\Http\Controllers\super_admin\OrganizationController');
   Route::Resource('organization_list','App\Http\Controllers\super_admin\OrganizationListController');
   Route::Resource('employee','App\Http\Controllers\super_admin\EmployeeController');
   Route::Resource('employee_list','App\Http\Controllers\super_admin\EmployeeListController');
   Route::Resource('employee_list','App\Http\Controllers\super_admin\EmployeeListController');
   Route::Resource('programme','App\Http\Controllers\super_admin\ProgramController');
   Route::Resource('programme_list','App\Http\Controllers\super_admin\ProgramListController');
   Route::Resource('document','App\Http\Controllers\super_admin\DocumentController');
   Route::get('/docs/{id}','App\Http\Controllers\super_admin\DocumentViewController@index');
   Route::Resource('training','App\Http\Controllers\super_admin\TrainingController');
   Route::Resource('training_list','App\Http\Controllers\super_admin\TrainingListController');
   Route::Resource('trainee','App\Http\Controllers\super_admin\TraineeController');
   Route::get('/search-trainee/{id}','App\Http\Controllers\super_admin\DocumentViewController@trainee');
   Route::get('/report/{id}','App\Http\Controllers\super_admin\DocumentViewController@report');
   Route::get('/word/{id}','App\Http\Controllers\super_admin\DocumentViewController@word');
   Route::Resource('/attendence','App\Http\Controllers\super_admin\AttendenceController');
   Route::Resource('/attendence_list','App\Http\Controllers\super_admin\AttendenceListController');
   Route::Resource('/expense','App\Http\Controllers\super_admin\ExpenseController');
   Route::Resource('/expense_list','App\Http\Controllers\super_admin\ExpenseListController');
   Route::Resource('/period','App\Http\Controllers\super_admin\TimeListController');
   Route::get('/expense_report/{month}/{year}','App\Http\Controllers\super_admin\DocumentViewController@period');

   
 });


 Route::group(['middleware' => ['auth', 'bay']], function() {

    /// Route::Resource('super-admin','SuperAdmin');

    Route::Resource('baybd_dashboard','App\Http\Controllers\baybd\BayBDController');

  });

  Route::group(['middleware' => ['auth', 'asaup']], function() {

    /// Route::Resource('super-admin','SuperAdmin');

    Route::Resource('asaup_dashboard','App\Http\Controllers\asaup\ASAUPController');

  });

  Route::group(['middleware' => ['auth', 'whef']], function() {

    /// Route::Resource('super-admin','SuperAdmin');

    Route::Resource('whef_dashboard','App\Http\Controllers\whef\WHEFController');

  });
