<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [Pengunjungcontroller::class, 'index']);
Route::get('/artikel', [Pengunjungcontroller::class, 'artikel']);
Route::get('/pengumuman', [Pengunjungcontroller::class, 'pengumuman']);
Route::get('/about', [Pengunjungcontroller::class, 'about']);

Route::get('/dataartikel', [Artikelcontroller::class, 'index']);
Route::get('/createartikel', [Artikelcontroller::class, 'create']);
Route::get('/editartikel', [Artikelcontroller::class, 'edit']);
Route::post('/saveartikel', [Artikelcontroller::class, 'store']);

Route::get('/datapengumuman', [Pengumumancontroller::class, 'index']);
Route::get('/createpengumuman', [Pengumumancontroller::class, 'create']);
Route::get('/editpengumuman/{id}', [Pengumumancontroller::class, 'edit']);
Route::post('/savepengumuman', [Pengumumancontroller::class, 'store']);
Route::put('/updatepengumuman/{id}', [Pengumumancontroller::class, 'update']);
Route::get('/deletepengumuman/{id}', [Pengumumancontroller::class, 'destroy']);




