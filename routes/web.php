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

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/home', [Pengunjungcontroller::class, 'index']);
Route::get('/artikel', [Pengunjungcontroller::class, 'artikel']);
Route::get('/pengumuman', [Pengunjungcontroller::class, 'pengumuman']);
Route::get('/about', [Pengunjungcontroller::class, 'about']);