<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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
Route::get('/bookmark/{id}', [bookController::class,'MyBookmarks'])->name('bookmarked');

