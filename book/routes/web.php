<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('db/erase');
});
<<<<<<< HEAD
Route::get('/index', [BookController::class,'index']);
=======
Route::get('/db/index', [BookController::class,'index']);
Route::get('/db/soumu',[MemberController::class,'soumu']);
//Route::post('/db/login',[MemberController::class,'login']);
>>>>>>> 1a0d79a7a80609ce9f531952e0594a6bcfb529da

Route::get('/db/add', [BookController::class,'add']);
Route::post('/db/add2', [BookController::class,'add2']);

Route::get('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase2', [BookController::class,'erase2']);
<<<<<<< HEAD
=======
Route::post('/db/erase2', [BookController::class,'erase2']);
Route::get('/db/list', [BookController::class,'list']);
Route::get('/db/detail', [BookController::class,'detail'])->name('db.detail');
Route::post('/db/comment_input', [ReviewController::class,'comment_input']);
>>>>>>> 1a0d79a7a80609ce9f531952e0594a6bcfb529da
