<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/kategori', function () {
    $data = [
        'tittle'    => 'Kategori'
    ];
    return view('kategori', $data);
})->name('kategori');

Route::get('/buku', function () {
    $data = [
        'tittle'    => 'Buku'
    ];
    return view('buku', $data);
})->name('buku');

Route::get('/anggota', function () {
    $data = [
        'tittle'    => 'Anggota'
    ];
    return view('anggota', $data);
})->name('anggota');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


