<?php

use App\Http\Controllers\ProdukController;
use App\Http\Livewire\Artikel;
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
    return view('pages.home');
});

Route::get('/properti', function () {
    return view('pages.layout', [
        'title' => 'properti'
    ]);
})->name('properti');

Route::get('/produk', function () {
    return view('pages.layout', [
        'title' => 'produk'
    ]);
})->name('produk');

Route::get('/produk/{id}', [ProdukController::class, 'show']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);


Route::get('artikel', Artikel::class)->name('artikel');

Route::get('karyawan', function() {
    return view('pages.layout', [
        'title' => 'karyawan'
    ]);
})->name('karyawan');

Route::get('karyawan2', function() {
    return view('pages.layout', [
        'title' => 'karyawan2'
    ]);
})->name('karyawan2');