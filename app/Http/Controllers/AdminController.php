<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Bank;
use App\Models\Haqqimizda;
use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\Mehsullar;
use App\Models\Sherhler;


class AdminController extends Controller
{
    public function genelayar(){
        $ayarlar=Ayarlar::first();
        return view('admin.genel_ayar')->with('ayarlar',$ayarlar);

    }

    public function sosialayar(){
        $ayarlar=Ayarlar::first();
        return view('admin.sosial_ayar')->with('ayarlar',$ayarlar);

    }

    public function iletisimayar(){
        $ayarlar=Ayarlar::first();
        return view('admin.iletisim_ayar')->with('ayarlar',$ayarlar);

    }

    public function haqqimizda(){
        $haqqimizda=Haqqimizda::first();
        return view('admin.haqqimizda')->with('haqqimizda',$haqqimizda);

    }
    public function kategori(){
        $kategori=Kategori::get();
        return view('admin.kategoriyalar')->with('kategori',$kategori);

    }

    public function kategorielaveet(){
        
        return view('admin.kategori_elaveet');

    }

    public function kategoriduzenle($id){
        $kategori=Kategori::find($id);
        return view('admin.kategoriyalar')->with('kategori',$kategori);

    }

    public function sherhler(){
        $sherhler=Sherhler::get();
        return view('admin.sherhler')->with('sherhler',$sherhler);

    }

    public function banklar(){
        $bank=Bank::get();
        return view('admin.bank')->with('bank',$bank);

    }

    public function bankelaveet(){
        
        return view('admin.bank_elaveet');

    }

    public function bankduzenle($id){
        $bank=Bank::find($id);
        return view('admin.bank_duzenle')->with('bank',$bank);

    }

    public function mehsullar(){
        $mehsullar=Mehsullar::get();
        return view('admin.mehsullar')->with('mehsullar',$mehsullar);

    }


    public function mehsulyukle(){
        
        return view('admin.mehsul_yukle');

    }


    public function mehsulduzenle($id){
        $mehsullar=Mehsullar::find($id);
        return view('admin.mehsul_duzenle')->with('mehsullar',$mehsullar);

    }


    public function girish(){
        return view('admin.girish');

    }

    public function qeydiyyat(){
        return view('admin.qeydiyyat');

    }


}
