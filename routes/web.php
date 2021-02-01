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
