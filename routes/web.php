<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
   return view('layout.main');
})->name('index');

Route::get('/add-asset', [\App\Http\Controllers\Controller::class,'addAsset'])->name('add-asset');
Route::get('/add-vendor', [\App\Http\Controllers\Controller::class,'addVendor'])->name('add-vendor');
Route::get('/add-work-order', [\App\Http\Controllers\Controller::class,'addWorkOrder'])->name('add-work-order');
Route::get('/vendors', [\App\Http\Controllers\Controller::class,'vendors'])->name('vendors');
Route::get('/ppm-detail', [\App\Http\Controllers\Controller::class,'ppmDetail'])->name('ppm-detail');
Route::get('/gp-detail', [\App\Http\Controllers\Controller::class,'gpDetail'])->name('gp-detail');

Route::get('/ppm-list', [\App\Http\Controllers\Controller::class,'ppmList'])->name('ppm-list');
Route::get('/wo-list', [\App\Http\Controllers\Controller::class,'woList'])->name('wo-list');




