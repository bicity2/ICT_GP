<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
Route::get('/', function () {
    return view('/db/add2');
});
Route::get('/db/index', [DbController::class,'index']);

Route::get('/db/add', [DbController::class,'add']);
Route::post('/db/add2', [DbController::class,'add2']);

Route::get('/db/erase', [DbController::class,'erase']);
Route::post('/db/erase', [DbController::class,'erase']);
Route::post('/db/erase2', [DbController::class,'erase2']);