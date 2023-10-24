<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;




class AyarController extends Controller
{
    


    public function genel_ayar_yenile(){


     return view('frond.home');


    }


    public function baglanti_ayar_yenile(Request $request)
    {
     $ayarlar=Ayarlar::first();
     $ayarlar->ayar_tel= $request->input('ayar_tel');
     $ayarlar->ayar_map= $request->input('ayar_map');
     $ayarlar->ayar_faks= $request->input('ayar_faks');
     $ayarlar->ayar_mail= $request->input('ayar_mail');
     $ayarlar->ayar_olke= $request->input('ayar_olke');
     $ayarlar->ayar_adres= $request->input('ayar_adres');
     $ayarlar->ayar_mesai= $request->input('ayar_mesai');
     $ayarlar->ayar_sheher= $request->input('ayar_sheher');



    $ayarlar->update();
    return back()->with("status","Yenileme ugurla yerine yetirildi");    
    }


    public function sosial_ayar_yenile(Request $request)
    {
     $ayarlar=Ayarlar::first();
     $ayarlar->ayar_facebook= $request->input('ayar_facebook');
     $ayarlar->ayar_twitter= $request->input('ayar_twitter');
     $ayarlar->ayar_google= $request->input('ayar_google');
     $ayarlar->ayar_youtube= $request->input('ayar_youtube');
   


    $ayarlar->update();
    return back()->with("status","Yenileme ugurla yerine yetirildi");    
    }
}
