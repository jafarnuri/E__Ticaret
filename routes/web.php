<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AyarController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\HaqqimizdaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\MehsullarController;
use App\Http\Controllers\SherhlerController;


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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

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
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/bizimleelaqe',[FrontendController::class,'bizimleelaqe'])->name('bizimleelaqe');
Route::get('/sebet',[FrontendController::class,'sebet'])->name('sebet');

Route::get('/girish',[FrontendController::class,'girish'])->name('girish');



//AdminController
Route::get('/genelayar',[AdminController::class, 'genelayar'])->name('genelayar');
Route::get('/sosialayar',[AdminController::class, 'sosialayar'])->name('sosialayar');
Route::get('/iletisimayar',[AdminController::class, 'iletisimayar'])->name('iletisimayar');
Route::get('/banklar',[AdminController::class, 'banklar'])->name('banklar');
Route::get('/bankelaveet',[AdminController::class, 'bankelaveet'])->name('bankelaveet');
Route::get('/bankduzenle/{id}',[AdminController::class, 'bankduzenle'])->name('bankduzenle');
Route::get('/sherhler',[AdminController::class, 'sherhler'])->name('sherhler');
Route::get('/kategori',[AdminController::class, 'kategori'])->name('kategori');
Route::get('/kategorielaveet',[AdminController::class, 'kategorielaveet'])->name('kategorielaveet');
Route::get('/kategori_yenile/{id}',[AdminController::class, 'kategori_yenile'])->name('kategori_yenile');
Route::get('/haqqimizda',[AdminController::class, 'haqqimizda'])->name('haqqimizda');

Route::get('/mehsullar',[AdminController::class, 'mehsullar'])->name('mehsullar');
Route::get('/mehsulyukle',[AdminController::class, 'mehsulyukle'])->name('mehsulyukle');
Route::get('/mehsulduzenle/{id}',[AdminController::class, 'mehsulduzenle'])->name('mehsulduzenle');


//AyarController
Route::post('/logoyenile', [AyarController::class,'logoyenile'])->name('logoyenile');
Route::post('/resimyenile', [AyarController::class,'resimyenile'])->name('resimyenile');
Route::post('/genelayaryenile', [AyarController::class,'genelayaryenile'])->name('genelayaryenile');
Route::post('/baglantiyenile', [AyarController::class,'baglantiyenile'])->name('baglantiyenile');
Route::post('/sosialyenile', [AyarController::class,'sosialyenile'])->name('sosialyenile');

//BankController
Route::post('/bank_elavet', [AyarController::class,'bank_elavet'])->name('bank_elavet');
Route::post('/bank_yenile/{id}', [AyarController::class,'bank_yenile'])->name('bank_yenile');
Route::get('/banksil/{id}', [AyarController::class,'banksil'])->name('banksil');

//HaqqimizdaController
Route::post('/haqqimizdayenile', [AyarController::class,'haqqimizdayenile'])->name('haqqimizdayenile');
Route::post('/haqqimizdalogo', [AyarController::class,'haqqimizdalogo'])->name('haqqimizdalogo');


//KategoriController
Route::post('/kategorielaveet', [AyarController::class,'kategorielaveet'])->name('kategorielaveet');
Route::post('/kateduzen/{id}', [AyarController::class,'kateduzen'])->name('kateduzen');
Route::get('/katesil/{id}', [AyarController::class,'katesil'])->name('katesil');

//KullaniciController 
Route::post('/kullanici_elavet', [KullaniciController::class,'kullanici_elavet'])->name('kullanici_elavet');

//MehsullarController
Route::post('/mehsul_elavet', [AyarController::class,'mehsul_elavet'])->name('mehsul_elavet');
Route::post('/mehsul_yenile/{id}', [AyarController::class,'mehsul_yenile'])->name('mehsul_yenile');
Route::get('/mehsulsil/{id}', [AyarController::class,'mehsulsil'])->name('mehsulsil');


//SherhlerController
Route::post('/sherh_elavet', [SherhlerController::class,'sherh_elavet'])->name('sherh_elavet');
Route::get('/sherhsil/{id}', [SherhlerController::class,'sherhsil'])->name('sherhsil');













