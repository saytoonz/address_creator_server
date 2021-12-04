<?php

use App\Http\Controllers\AddressesController;
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



Route::post("save-address", [AddressesController::class, "store"]);
Route::get("get-addresses", [AddressesController::class, "getAddresses"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
