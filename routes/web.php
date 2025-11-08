<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/popular', [HomeController::class, 'popular'])->name('popular');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');
