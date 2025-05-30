<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MemberController;
Route::get('/', function () {
    return view('db/erase');
});
Route::get('/index', [BookController::class,'index']);

Route::get('/db/add', [BookController::class,'add']);
Route::post('/db/add2', [BookController::class,'add2']);

Route::get('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase2', [BookController::class,'erase2']);
<<<<<<< HEAD
=======
Route::get('/db/list', [BookController::class,'list']);
Route::get('/db/detail', [BookController::class,'detail'])->name('db.detail');
Route::post('/db/comment_input', [ReviewController::class,'comment_input']);
>>>>>>> 0abcad101c67a040263b9873707f828ec3dcf248
