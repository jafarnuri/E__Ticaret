<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;

class AyarController extends Controller
{
 public function genelayarelaveet(Request $request){

    $request->validate([
        'ayar_bashliq'=>'required',
        'ayar_achiqlama'=>'required',
        'ayar_kilidsoz'=>'required',
        'ayar_yazar'=>'required'

    ]);

    $ayarlar=new Ayarlar();
    $ayarlar->ayar_bashliq=$request->ayar_bashliq;
    $ayarlar->ayar_achiqlama=$request->ayar_achiqlama;
    $ayarlar->ayar_kilidsoz=$request->ayar_kilidsoz;
    $ayarlar->ayar_yazar=$request->ayar_yazar;
    $ayarlar->save();



    return back();

 }
}
