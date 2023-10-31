<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Baglanti;
use App\Models\Sosial;
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
        $sosial=Sosial::first();
        return view('admin.sosial_ayar')->with('sosial',$sosial);

    }

    public function iletisimayar(){
        $baglanti=Baglanti::first();
        return view('admin.iletisim_ayar')->with('baglanti',$baglanti);

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

    public function kategori_yenile($id){
        $kat=Kategori::find($id);
        

    return view('admin.kategori_duzenle')->with('kat',$kat);


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
        $kategori=Kategori::get();
        
        return view('admin.mehsul_yukle')->with('kategori',$kategori);

    }


    public function mehsulduzenle($id){
        $mehsullar=Mehsullar::find($id);
        $kategori=Kategori::get();

        return view('admin.mehsul_duzenle')->with('mehsullar',$mehsullar)->with('kategori',$kategori);

    }





}
