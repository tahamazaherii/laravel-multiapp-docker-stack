<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/', function () {
//     return response()->json(['msg' => 'api  ok']);
// });
Route::get('/', [BrandController::class, 'index'])->name('index');
