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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/perangkat-desa', function () {
    return view('perangkat-desa');
})->name('perangkat-desa');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/news', function () {
    return view('news-content');
})->name('news-show');

Route::get('/admin/berita', function () {
    return view('admin-berita');
});
