<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\MilkbankController;
use App\Http\Controllers\MythOrTruthController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/links', LinkController::class);
Route::resource('/milkbanks', MilkbankController::class);
Route::resource('/mythsortruths', MythOrTruthController::class);
