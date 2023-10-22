<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;

class AyarController extends Controller
{
    public function genel_ayar_duzenle(Request $request)
    {
     $ayarlar=Ayarlar::first();
     $ayarlar->ayar_bashliq= $request->input('ayar_bashliq');
     $ayarlar->ayar_achiqlama= $request->input('ayar_achiqlama');
     $ayarlar->ayar_kilidsoz= $request->input('ayar_kilidsoz');
     $ayarlar->ayar_yazar= $request->input('ayar_yazar');
     $ayarlar->ayar_bashliq= $request->input('ayar_bashliq');
     $ayarlar->ayar_bashliq= $request->input('ayar_bashliq');



    $ayarlar->update();
    return back()->with("status","Yenileme ugurla yerine yetirildi");    
    }
}
