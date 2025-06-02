<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('index');
});

/* Menu */
Route::get('/index', [BookController::class,'index']);
Route::get('/db/soumu',[MemberController::class,'soumu']);
Route::get('/db/logout',[MemberController::class,'logout']);
Route::get('/db/normal',[MemberController::class,'normal']);
Route::get('/db/index', [BookController::class,'index']);
//Route::get('/', [MemberController::class, 'showLogin'])->name('login');
Route::post('/login', [MemberController::class, 'login'])->name('login.process');
//Route::post('/db/login',[MemberController::class,'login']);

/* Auth */
// Route::middleware('web')->post('/login', [MemberController::class, 'login']);

/* Add Book */
Route::get('/db/add', [BookController::class,'add']);
Route::post('/db/add2', [BookController::class,'add2']);

/* Delete Book */
Route::get('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase', [BookController::class,'erase']);
Route::post('/db/erase2', [BookController::class,'erase2']);

/* Book List */
Route::get('/db/list', [BookController::class,'list']);
Route::get('/db/detail', [BookController::class,'detail'])->name('db.detail');
Route::post('/db/comment_input', [ReviewController::class,'comment_input']);


Route::get('/db/addWithBarcode', [BookController::class, 'addWithBarcode'])->name('db.addWithBarcode');
Route::get('/db/addCheck/{isbn}', [BookController::class, 'addCheck'])->name('db.addCheck');
