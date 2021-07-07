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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/links-uteis', [App\Http\Controllers\LinkController::class, 'index'])->name('index');
Route::get('/links-uteis/create',  [App\Http\Controllers\LinkController::class, 'create'])->name('link.create');
Route::get('/links-uteis/edit',  [App\Http\Controllers\LinkController::class, 'edit'])->name('link.edit');
Route::post('/links-uteis/{id}',  [App\Http\Controllers\LinkController::class, 'store'])->name('link.store');
