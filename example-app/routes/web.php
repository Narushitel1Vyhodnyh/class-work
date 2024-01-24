<?php

use Illuminate\Support\Facades\Route;

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
//открытие главной страницы
//Route::get('/', function () {
//    return view('welcome');
//});
//
////открытие страницы о нас
// Route::get('about', function (){
//     return view('about');
// });



Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('contacts', [\App\Http\Controllers\TwoController::class, 'contacts'])->name('contacts');
Route::get('blog', [\App\Http\Controllers\TwoController::class, 'blog'])->name('blog');
Route::get('portfolio', [\App\Http\Controllers\TwoController::class, 'portfolio'])->name('portfolio');
Route::get('price', [\App\Http\Controllers\TwoController::class, 'price'])->name('price');

Route::prefix('/post')->group(function (){
   Route::get('/index', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::get('/show/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class,'destroy'])->name('post.delete');
});

Route::prefix('/article')->group(function (){
    Route::get('/index', [\App\Http\Controllers\ArticleController::class, 'index'])->name('article.index');
    Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'create'])->name('article.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/store', [\App\Http\Controllers\ArticleController::class, 'store'])->name('article.store');
    Route::put('/update/{post}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('article.update');
    Route::get('/show/{post}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');
    Route::delete('/delete/{post}', [\App\Http\Controllers\ArticleController::class,'destroy'])->name('article.delete');
});
