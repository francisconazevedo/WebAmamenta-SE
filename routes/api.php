<?php

use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DonaterController;
use App\Http\Controllers\LinkController;
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
   Route::apiResource('donaters', DonaterController::class)->only('store');
   Route::apiResource('milkbanks', DonaterController::class)->only('index');
   Route::apiResource('myths-or-truths', MythOrTruthController::class)->only('index');
   Route::apiResource('links', LinkController::class)->only('index');
   Route::get('how-donate', 'ConfigurationController@howDonate');
});
