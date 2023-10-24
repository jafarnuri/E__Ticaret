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
Route::get('/banklar',[AdminController::class, 'banklar'])->name('banklar');
Route::get('/bankelaveet',[AdminController::class, 'bankelaveet'])->name('bankelaveet');
Route::get('/bankduzenle',[AdminController::class, 'bankduzenle'])->name('bankduzenle');
Route::get('/sherhler',[AdminController::class, 'sherhler'])->name('sherhler');
Route::get('/kategori',[AdminController::class, 'kategori'])->name('kategori');
Route::get('/kategorielaveet',[AdminController::class, 'kategorielaveet'])->name('kategorielaveet');
Route::get('/kategoriduzenle',[AdminController::class, 'kategoriduzenle'])->name('kategoriduzenle');
Route::get('/haqqimizda',[AdminController::class, 'haqqimizda'])->name('haqqimizda');
Route::get('/girish',[AdminController::class, 'girish'])->name('girish');
Route::get('/qeydiyyat',[AdminController::class, 'qeydiyyat'])->name('qeydiyyat');
Route::get('/mehsullar',[AdminController::class, 'mehsullar'])->name('mehsullar');
Route::get('/mehsulyukle',[AdminController::class, 'mehsulyukle'])->name('mehsulyukle');
Route::get('/mehsulduzenle',[AdminController::class, 'mehsulduzenle'])->name('mehsulduzenle');


//AyarController
Route::post('/genelayar_yenile/{id}', [AyarController::class,'genel_ayar_yenile'])->name('genel_ayar_yenile');
Route::post('/baglantiayar_yenile', [AyarController::class,'baglanti_ayar_yenile'])->name('baglanti_ayar_yenile');
Route::post('/sosialayar_yenile', [AyarController::class,'sosial_ayar_yenile'])->name('sosial_ayar_yenile');

//BankController
Route::post('/bank_elavet', [BankController::class,'bank_elavet'])->name('bank_elavet');
Route::post('/bank_yenile/{id}', [BankController::class,'bank_yenile'])->name('bank_yenile');
Route::get('/banksil/{id}', [BankController::class,'banksil'])->name('banksil');

//HaqqimizdaController
Route::post('/haqqimizda_yenile', [HaqqimizdaController::class,'haqqimizda_yenile'])->name('haqqimizda_yenile');

//KategoriController
Route::post('/kategori_elavet', [KategoriController::class,'kategori_elavet'])->name('kategori_elavet');
Route::post('/kategori_yenile/{id}', [KategoriController::class,'kategori_yenile'])->name('kategori_yenile');
Route::get('/kategori_sil/{id}', [KategoriController::class,'kategori_sil'])->name('kategori_sil');

//KullaniciController 
Route::post('/kullanici_elavet', [KullaniciController::class,'kullanici_elavet'])->name('kullanici_elavet');

//MehsullarController
Route::post('/mehsul_elavet', [MehsullarController::class,'mehsul_elavet'])->name('mehsul_elavet');
Route::post('/mehsul_yenile/{id}', [MehsullarController::class,'mehsul_yenile'])->name('mehsul_yenile');
Route::get('/mehsulsil/{id}', [MehsullarController::class,'mehsulsil'])->name('mehsulsil');


//SherhlerController
Route::post('/sherh_elavet', [SherhlerController::class,'sherh_elavet'])->name('sherh_elavet');
Route::get('/sherhsil/{id}', [SherhlerController::class,'sherhsil'])->name('sherhsil');













