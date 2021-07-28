<?php

use App\Http\Controllers\ItemContreller;
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

Route::get('/items',[ItemContreller::class,'index']);

Route::prefix('/item')->group(function(){
    Route::post('/store',[ItemContreller::class,'store']);
    Route::put('/{id}',[ItemContreller::class,'update']);
    Route::delete('/{id}',[ItemContreller::class,'destroy']);
});
