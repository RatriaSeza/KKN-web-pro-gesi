<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
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

Route::get('/', HomeController::class)->name('homepage');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/perangkat-desa', function () {
    return view('perangkat-desa');
})->name('perangkat-desa');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{news:slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/admin/berita', [NewsController::class, 'indexAdmin'])->name('admin.news');

Route::get('/admin/berita/create', [NewsController::class, 'create'])->name('admin.news.create');
Route::delete('/admin/berita/{news:slug}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
Route::post('/admin/berita', [NewsController::class, 'store'])->name('admin.news.store');
Route::get('/admin/berita/{news:slug}/publish', [NewsController::class, 'togglePublish'])->name('admin.news.toggle.publish');

Route::get('/test', function () {
    return view('test');
});
