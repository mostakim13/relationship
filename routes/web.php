<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [StudentController::class, 'relation']);
Route::get('/',                     [StudentController::class, 'dashboard']);
Route::get('/show',                 [HomeController::class, 'home']);
//==================================================Student info========================================

Route::get('/showData1',            [StudentController::class, 'show1']);
Route::get('/index1',               [StudentController::class, 'index']);
Route::post('/storeData1',          [StudentController::class, 'store1'])->name('storeData1');

Route::get('/editData1/{data}',     [StudentController::class, 'edit1']);
Route::post('/updateData1/{id}',    [StudentController::class, 'update1'])->name('updateData1');
Route::get('/delete1/{id}',         [StudentController::class, 'destroy1'])->name('delete1');

//===============================================More info===========================================
// Route::get('/morePage', [StudentController::class, 'detailMore']); Route::get('/show2',            [DetailController::class, 'home2']);
Route::get('/showData2',            [DetailController::class, 'show2']);
Route::get('/indexData',            [DetailController::class, 'index2']);
Route::post('/storeData2',          [DetailController::class, 'store2'])->name('storeData2');

Route::get('/editData2/{data}',     [DetailController::class, 'edit2']);
Route::post('/updateData2/{id}',    [DetailController::class, 'update2'])->name('updateData2');
Route::get('/delete2/{id}',         [DetailController::class, 'destroy2'])->name('delete2');
