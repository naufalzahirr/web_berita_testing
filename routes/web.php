<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', [BlogController::class, 'index']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('loginpost', [LoginController::class, 'loginpost'])->name('loginpost');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/blog/kategori/{id}', [BlogController::class, 'kategori'])->name('blog.kategori');
Route::get('/blog/berita/{id}', [BlogController::class, 'berita'])->name('blog.berita');
Route::resource('blog',BlogController::class);

Route::group(['middleware' => ['auth','CheckRole:Admin, Kreator']],function(){
    Route::resource('berita',BeritaController::class);
});

Route::group(['middleware' => ['auth','CheckRole:Admin']],function(){
    Route::resource('kategori',KategoriController::class);
    Route::resource('user',UserController::class);
});