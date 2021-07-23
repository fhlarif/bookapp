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

Route::get('/book/index',[\App\Http\Controllers\BookApp\BookController::class,'index'])->name('book.index');
Route::get('/book/create',[\App\Http\Controllers\BookApp\BookController::class,'create'])->name('book.create');
Route::post('/book/store',[\App\Http\Controllers\BookApp\BookController::class,'store'])->name('book.store');
Route::get('/book/edit/{id}',[\App\Http\Controllers\BookApp\BookController::class,'edit'])->name('book.edit');
Route::post('/book/update/{id}',[\App\Http\Controllers\BookApp\BookController::class,'update'])->name('book.update');

