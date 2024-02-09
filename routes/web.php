<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\authController;

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

Route::get('/', [bookController::class,'index'])->name('home');
Route::get('/categorie', [bookController::class,'Categorie'])->name('categorie');
Route::get('/categorie/{id}', [bookController::class,'bookInCategorie'])->name('bookInCategorie');
Route::get('/book/{id}', [bookController::class,'detail'])->name('detail');
Route::get('/delete/{id}', [bookController::class,'deleteBook'])->name('delete');
Route::post('/ajouterBook', [bookController::class, 'ajouter'])->name('ajouterBook');
Route::post('/updateBook', [bookController::class, 'update'])->name('update');
Route::post('/ajouterBookmark', [bookController::class, 'bookmark'])->name('Bookmark');
Route::get('/bookmark', [bookController::class,'MyBookmarks'])->name('bookmarked');

Route::get('/login', [authController::class,'login'])->name('login');
Route::get('/register', [authController::class,'register'])->name('register');
Route::post('/loging', [authController::class, 'loging'])->middleware('login')->name('loging');
Route::post('/registration', [authController::class, 'registration'])->middleware('register')->name('registeration');
Route::get('/logout', [authController::class, 'logout'])->middleware('logout')->name('logout');