<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\AssetController;





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

Route::group(['prefix'=>'department'], function(){

   // Route::get('/create', [\App\Http\Controllers\Controller::class,'addDepartment'])->name('add-department');
   Route::get('/', function(){
      return "Route";
   });
  
});


Route::get('/', function () {
   return view('layout.main');
})->name('index');
Route::get('/admin-panel', [\App\Http\Controllers\Controller::class,'adminPanel'])->name('admin-panel');

// Route::get('/add-asset', [\App\Http\Controllers\Controller::class,'addAsset'])->name('add-asset');
Route::get('/add-vendor', [\App\Http\Controllers\Controller::class,'addVendor'])->name('add-vendor');
Route::get('/add-work-order', [\App\Http\Controllers\Controller::class,'addWorkOrder'])->name('add-work-order');
Route::get('/vendors', [\App\Http\Controllers\Controller::class,'vendors'])->name('vendors');
Route::get('/ppm-detail', [\App\Http\Controllers\Controller::class,'ppmDetail'])->name('ppm-detail');
Route::get('/gp-detail', [\App\Http\Controllers\Controller::class,'gpDetail'])->name('gp-detail');

Route::get('/ppm-list', [\App\Http\Controllers\Controller::class,'ppmList'])->name('ppm-list');
Route::get('/wo-list', [\App\Http\Controllers\Controller::class,'woList'])->name('wo-list');
Route::get('/asset-list', [\App\Http\Controllers\Controller::class,'assetList'])->name('asset-list');
// Route::get('/add-department', [\App\Http\Controllers\Controller::class,'addDepartment'])->name('add-department');
Route::get('/service-categories', [\App\Http\Controllers\Controller::class,'serviceCategories'])->name('service-categories');
Route::get('/define-sla', [\App\Http\Controllers\Controller::class,'defineSla'])->name('define-sla');

Route::get('/calender', [\App\Http\Controllers\Controller::class,'calender'])->name('Calender');

// chartOfAccountController
Route::controller(ServiceCategoryController::class)->prefix('service-category')->group( function () {

   Route::get('/department-wise', 'deptServiceCategories')->name('dept-service-categories');
  
});


Route::resource('department', DepartmentController::class);
Route::resource('serviceCategory', ServiceCategoryController::class);
Route::resource('asset', AssetController::class);





