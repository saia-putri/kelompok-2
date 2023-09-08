<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengunjungcontroller;
use App\Http\Controllers\Artikelcontroller;
use App\Http\Controllers\Pengumumancontroller;

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


Route::get('/artikel.admin', function () {
    return view('admin.artikel');
});

Route::get('/pengumuman.admin', function () {
    return view('admin.pengumuman');
});

Route::get('/home', [Pengunjungcontroller::class, 'index']);
Route::get('/artikel', [Pengunjungcontroller::class, 'artikel']);
Route::get('/pengumuman', [Pengunjungcontroller::class, 'pengumuman']);
Route::get('/about', [Pengunjungcontroller::class, 'about']);

Route::get('/index', [Artikelcontroller::class, 'index']);
Route::get('/create', [Artikelcontroller::class, 'create']);
Route::get('/edit', [Artikelcontroller::class, 'edit']);

