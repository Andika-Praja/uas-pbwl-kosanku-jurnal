<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);

Route::get('/kamar', [App\Http\Controllers\KamarController::class, 'index']);
Route::get('/kamar/create', [App\Http\Controllers\KamarController::class, 'create']);
Route::post('/kamar', [App\Http\Controllers\KamarController::class, 'store']);
Route::get('/kamar/edit/{id}', [App\Http\Controllers\KamarController::class, 'edit']);
Route::patch('/kamar/{id}', [App\Http\Controllers\KamarController::class, 'update']);
Route::delete('/kamar/{id}', [App\Http\Controllers\KamarController::class, 'destroy']);

Route::get('/penghuni', [App\Http\Controllers\PenghuniController::class, 'index']);
Route::get('/penghuni/create', [App\Http\Controllers\PenghuniController::class, 'create']);
Route::post('/penghuni', [App\Http\Controllers\PenghuniController::class, 'store']);
Route::get('/penghuni/edit/{id}', [App\Http\Controllers\PenghuniController::class, 'edit']);
Route::patch('/penghuni/{id}', [App\Http\Controllers\PenghuniController::class, 'update']);
Route::delete('/penghuni/{id}', [App\Http\Controllers\PenghuniController::class, 'destroy']);

Route::get('/sewa', [App\Http\Controllers\SewaController::class, 'index'])->name('sewa');
Route::get('/sewa/create', [App\Http\Controllers\SewaController::class, 'create'])->name('sewa_create');
Route::post('sewa/store', [App\Http\Controllers\SewaController::class, 'store'])->name('sewa_store');
Route::get('/sewa/edit/{id}', [App\Http\Controllers\SewaController::class, 'edit'])->name('sewa_edit');
Route::put('/sewa/update/{id}', [App\Http\Controllers\SewaController::class, 'update'])->name('sewa_update');
Route::delete('/sewa/delete/{id}', [App\Http\Controllers\SewaController::class, 'destroy'])->name('sewa_delete');