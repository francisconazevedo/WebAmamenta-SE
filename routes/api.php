<?php

use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DonaterController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MilkbankController;
use App\Http\Controllers\MythOrTruthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

Route::prefix('v1')->group(function (){
   Route::get('donaters', 'ConfigurationController@howDonate')->only('store');
   Route::get('milkbanks', 'ConfigurationController@howDonate')->only('index');
   Route::get('myths-or-truths', 'ConfigurationController@howDonate')->only('index');
   Route::get('links', 'ConfigurationController@howDonate')->only('index');
   Route::get('how-donate', 'ConfigurationController@howDonate');
});
