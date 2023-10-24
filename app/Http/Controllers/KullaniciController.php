<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;

class KullaniciController extends Controller
{
    public function kullanici_elavet(Request $request)
    {
    $kullanici=new Kullanici();
    $kullanici->kullanici_ad=$request->input('kullanici_ad');
    $kullanici->kullanici_soyad=$request->input('kullanici_soyad');
    $kullanici->kullanici_password=$request->input('kullanici_password');
    $kullanici->kullanici_mail=$request->input('kullanici_mail');
    $kullanici->kullanici_tel=$request->input('kullanici_tel');
    $kullanici->kullanici_adres=$request->input('kullanici_adres');
    $kullanici->kullanici_sheher=$request->input('kullanici_sheher');
    $kullanici->kullanici_olke=$request->input('kullanici_olke');

    $kullanici->save();
    return view ('frond.home')->with("status","Qeydiyyat ugurla yerine yetirildi... ");

    }
}
