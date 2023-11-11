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
use App\Http\Controllers\AdminProfilController;



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
//FrontendController
Route::get('/', function () {
    return view('frond/home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/sebet', function () {
        return view('frond.cart');
    })->name('sebet');
});


require __DIR__.'/auth.php';


//FrontendController
Route::get('/kategori',[FrontendController::class,'kategori'])->name('kategori');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/bizimleelaqe',[FrontendController::class,'bizimleelaqe'])->name('bizimleelaqe');

Route::get('/kategorilist/{id}',[FrontendController::class,'kategorilist'])->name('kategorilist');
Route::get('/renglist/{id}',[FrontendController::class,'renglist'])->name('renglist');
Route::get('/sizelist/{id}',[FrontendController::class,'sizelist'])->name('sizelist');
Route::get('/urundetay/{id}',[FrontendController::class,'urundetay'])->name('urundetay');


//AdminController
Route::get('/parol_unutum',[AdminController::class,'parol_unutum_admin'])->name('parol_unutum');
Route::prefix('/admin')->namespace('App\Http\Controllers')->group(function(){
    Route::match(['get','post'],'login','AdminController@login');
    
    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');
        Route::get('genelayar','AdminController@genelayar');
        Route::get('banklar','AdminController@banklar');
        Route::get('sosialayar','AdminController@sosialayar');
        Route::get('iletisimayar','AdminController@iletisimayar');
        Route::get('bankelaveet','AdminController@bankelaveet');
        Route::get('bankduzenle/{id}','AdminController@logout');
        Route::get('sherhler','AdminController@sherhler');
        Route::get('kategori','AdminController@kategori');
        Route::get('kategorielaveet','AdminController@kategorielaveet');
        Route::get('kategori_yenile/{id}','AdminController@kategori_yenile');
        Route::get('haqqimizda','AdminController@haqqimizda');
        Route::get('mehsullar','AdminController@mehsullar');
        Route::get('mehsulduzenle/{id}','AdminController@mehsulduzenle');
        Route::get('mehsulyukle','AdminController@mehsulyukle');
        Route::get('istifadeci','AdminController@istifadeci');
        Route::get('haqqimizda','AdminController@haqqimizda');
        Route::get('haqqimizda','AdminController@haqqimizda');

        Route::get('rengler','AdminController@rengler');
        Route::get('reng_elavet','AdminController@reng_elavet');
        Route::get('reng_yenile/{id}','AdminController@reng_yenile');

        Route::get('size','AdminController@size');
        Route::get('size_elavet','AdminController@size_elavet');
        Route::get('size_yenile/{id}','AdminController@size_yenile');



//AyarController
        Route::post('logoyenile','AyarController@logoyenile');
        Route::post('resimyenile','AyarController@resimyenile');
        Route::post('genelayaryenile','AyarController@genelayaryenile');
        Route::post('baglantiyenile','AyarController@baglantiyenile');
        Route::post('sosialyenile','AyarController@sosialyenile');


//BankController
        Route::post('bank_elavet','AyarController@bank_elavet');
        Route::post('bank_yenile/{id}','AyarController@bank_yenile');
        Route::get('banksil/{id}','AyarController@banksil');


//HaqqimizdaController
        Route::post('haqqimizdayenile','AyarController@haqqimizdayenile');
        Route::post('haqqimizdalogo','AyarController@haqqimizdalogo');


//KategoriController
        Route::post('kategorielaveet','AyarController@kategorielaveet');
        Route::post('kateduzen/{id}','AyarController@kateduzen');
        Route::get('katesil/{id}','AyarController@katesil');


//MehsullarController
        Route::post('mehsul_elavet','AyarController@mehsul_elavet');
        Route::post('mehsul_yenile/{id}','AyarController@mehsul_yenile');
        Route::get('mehsulsil/{id}','AyarController@mehsulsil');

        Route::get('admin_edit','AdminController@admin_edit');
        Route::post('update_password','AdminController@admin_update_password');
        Route::post('update_info','AdminController@update_info_admin');
        Route::post('update_resim','AdminController@admin_resim_update');

//RengController
        Route::post('rengelaveet','AyarController@rengelaveet');
        Route::post('rengduzenle/{id}','AyarController@rengduzenle');
        Route::get('rengsil/{id}','AyarController@rengsil');
        
//RengController
        Route::post('sizeelaveet','AyarController@sizeelaveet');
        Route::post('sizeduzenle/{id}','AyarController@sizeduzenle');
        Route::get('sizesil/{id}','AyarController@sizesil');
        

});
});




