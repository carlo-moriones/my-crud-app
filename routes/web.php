<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Inertia\Inertia;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('books/create',[BookController::class,'create']);
Route::get('books',[BookController::class,'index'])->name('books.index');
Route::post('books',[BookController::class,'store']);