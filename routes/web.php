<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeliController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pesantiket', [App\Http\Controllers\PesantiketController::class, 'index'])->name('pesantiket');
Route::get('/tourguide', [App\Http\Controllers\TourguideController::class, 'index'])->name('tourguide');
Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');

Route::get('/beli', [App\Http\Controllers\BeliController::class, 'index'])->name('beli');
Route::post('/beli/store', [App\Http\Controllers\BeliController::class, 'store']);
Route::get('/berhasilpesan', [App\Http\Controllers\BeliController::class, 'berhasilpesan'])->name('berhasilpesan');

Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comment');
Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store']);

Route::get('comment/edit/{id}', [App\Http\Controllers\CommentController::class, 'edit'])->name('edit');
Route::post('/comment/update', [App\Http\Controllers\CommentController::class, 'update']);

Route::get('comment/hapus/{id}', [App\Http\Controllers\CommentController::class, 'hapus'])->name('hapus');
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri');

Route::get('/beli/deletesession', [App\Http\Controllers\BeliController::class, 'deletesession'])->name('deletesession');
Route::get('/pemesanan/hapus/{id}', [App\Http\Controllers\PemesananController::class, 'hapus'])->name('hapus');