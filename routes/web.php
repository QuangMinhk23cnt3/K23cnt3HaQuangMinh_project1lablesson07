<?php

use App\Http\Controllers\HqmKhoaController;
use App\Http\Controllers\HqmMonHocController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/khoas',[HqmKhoaController::class,'hqmGetAllKhoa'])->name('hqmKhoa.hqmgetallkhoa');
Route::get('/khoas/detail/{makh}',[HqmKhoaController::class,'hqmGetKhoa'])->name('hqmKhoa.hqmgetKhoa');
// #khoa - edit
Route::get('/khoas/edit/{makh}',[HqmKhoaController::class,'hqmEdit'])->name('hqmKhoa.hqmEdit');
Route::post('/khoas/edit',[HqmKhoaController::class,'hqmEditSummit'])->name('hqmKhoa.hqmEditSubmit');
// # khoa - insert
Route::get('/khoas/insert',[HqmKhoaController::class,'hqmInsert'])->name('hqmKhoa.hqmInsert');
Route::post('/khoas/insert',[HqmKhoaController::class,'hqmInsertSubmit'])->name('hqmKhoa.hqmInsertSubmit');
#khoa - delete
Route::get('/khoas/delete/{makh}',[HqmKhoaController::class,'hqmDelete'])->name('hqmKhoa.hqmDelete');
#monhoc
Route::get('/monhocs',[HqmMonHocController::class,'hqmList'])->name('hqmmonhoc.hqmList');