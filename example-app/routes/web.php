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
    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class,'destroy'])->name('post.delete');
});
