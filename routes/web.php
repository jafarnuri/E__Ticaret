<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;


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
    return view('frond/home');
})->name('home');

Route::get('/adminn', function () {
    return view('admin/home');
})->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//FrontendController
Route::get('/kategori',[FrontendController::class,'kategori'])->name('kategori');
Route::get('/haqqimizda',[FrontendController::class,'haqqimizda'])->name('haqqimizda');
Route::get('/bizimleelaqe',[FrontendController::class,'bizimleelaqe'])->name('bizimleelaqe');
Route::get('/sebet',[FrontendController::class,'sebet'])->name('sebet');



//AdminController
Route::get('/genelayar',[AdminController::class, 'genelayar'])->name('genelayar');
Route::get('/sosialayar',[AdminController::class, 'sosialayar'])->name('sosialayar');
Route::get('/iletisimayar',[AdminController::class, 'iletisimayar'])->name('iletisimayar');

//banklar
Route::get('/banklar',[AdminController::class, 'banklar'])->name('banklar');
Route::get('/bankelaveet',[AdminController::class, 'bankelaveet'])->name('bankelaveet');
Route::get('/bankduzenle',[AdminController::class, 'bankduzenle'])->name('bankduzenle');


Route::get('/sherhler',[AdminController::class, 'sherhler'])->name('sherhler');

//Kategori
Route::get('/kategori',[AdminController::class, 'kategori'])->name('kategori');
Route::get('/kategorielaveet',[AdminController::class, 'kategorielaveet'])->name('kategorielaveet');
Route::get('/kategoriduzenle',[AdminController::class, 'kategoriduzenle'])->name('kategoriduzenle');


Route::get('/haqqimizda',[AdminController::class, 'haqqimizda'])->name('haqqimizda');
Route::get('/girish',[AdminController::class, 'girish'])->name('girish');
Route::get('/qeydiyyat',[AdminController::class, 'qeydiyyat'])->name('qeydiyyat');

//mehsullar
Route::get('/mehsullar',[AdminController::class, 'mehsullar'])->name('mehsullar');
Route::get('/mehsulyukle',[AdminController::class, 'mehsulyukle'])->name('mehsulyukle');
Route::get('/mehsulduzenle',[AdminController::class, 'mehsulduzenle'])->name('mehsulduzenle');


