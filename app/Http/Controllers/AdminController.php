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
        return view('admin.genel_ayar');

    }

    public function sosialayar(){
        return view('admin.sosial_ayar');

    }

    public function iletisimayar(){
        return view('admin.iletisim_ayar');

    }

    public function haqqimizda(){
        return view('admin.haqqimizda');

    }
    public function kategori(){
        return view('admin.kategoriyalar');

    }

    public function kategorielaveet(){
        return view('admin.kategori_elaveet');

    }

    public function kategoriduzenle(){
        return view('admin.kategori_duzenle');

    }

    public function sherhler(){
        return view('admin.sherhler');

    }

    public function banklar(){
        return view('admin.bank');

    }

    public function bankelaveet(){
        return view('admin.bank_elaveet');

    }

    public function bankduzenle(){
        return view('admin.bank_duzenle');

    }

    public function mehsullar(){
        return view('admin.mehsullar');

    }


    public function mehsulyukle(){
        return view('admin.mehsul_yukle');

    }


    public function mehsulduzenle(){
        return view('admin.mehsul_duzenle');

    }


    public function girish(){
        return view('admin.girish');

    }

    public function qeydiyyat(){
        return view('admin.qeydiyyat');

    }


}
