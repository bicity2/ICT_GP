<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;



// Route::get('/', [BookController::class, 'list']);
Route::get('/', function () {
    return view('index');
});

Route::get('/db/selectHowToAdd', function () {
    return view('db.selectHowToAdd');
});

Route::get('/db/selectHowToErase', function () {
    return view('db.selectHowToErase');
});




/**
 * DEBUG A 1/2 -->>
 * Route::get('/login', [MemberController::class, 'showLogin'])->name('login');
 * Route::post('/login', [MemberController::class, 'login'])->name('login.process');
 * 
 * Route::middleware(['auth'])->group(function () {
 * <<-- DEBUG A 1/2
 */

/* Menu */
Route::get('/index', [BookController::class, 'index']);
Route::get('/db/soumu', [MemberController::class, 'soumu']);
Route::get('/db/logout', [MemberController::class, 'logout']);
Route::get('/db/normal', [MemberController::class, 'normal']);
Route::get('/db/index', [BookController::class, 'index']);
//Route::get('/', [MemberController::class, 'showLogin'])->name('login');
Route::post('/login', [MemberController::class, 'login'])->name('login.process');
//Route::post('/db/login',[MemberController::class,'login']);

/* Auth */
// Route::middleware('web')->post('/login', [MemberController::class, 'login']);

/* Add Book */
Route::get('/db/add', [BookController::class, 'add']);
Route::post('/db/addDone', [BookController::class, 'addDone']);

/* Delete Book */
Route::get('/db/erase', [BookController::class, 'erase']);
Route::post('/db/erase', [BookController::class, 'erase']);
Route::post('/db/eraseDone', [BookController::class, 'eraseDone'])->name('db.eraseDone');
Route::post('/db/eraseDoneFromList', [BookController::class, 'eraseDoneFromList'])->name('db.eraseDonFromList');

/* Book List */
Route::get('/db/list', [BookController::class, 'list'])->name('db.list');
Route::get('/db/detail', [BookController::class, 'detail'])->name('db.detail');
Route::get('/db/comment_input', [ReviewController::class, 'comment_input'])->name('db.comment_input');
Route::post('/db/comment_store', [ReviewController::class, 'store'])->name('db.comment_store');
Route::delete('/db/comment_delete/{id}', [ReviewController::class, 'destroy'])->name('db.comment_delete');

Route::get('/db/addWithBarcode', [BookController::class, 'addWithBarcode'])->name('db.addWithBarcode');
Route::get('/db/addCheck/{isbn}', [BookController::class, 'addCheck'])->name('db.addCheck');

Route::get('/db/eraseWithBarcode', [BookController::class, 'eraseWithBarcode']);
Route::get('/db/eraseCheck/{isbn}', [BookController::class, 'eraseCheck']);


/**
 * DEBUG A 2/2 -->>
 * });
 * <<-- DEBUG A 2/2
 */
