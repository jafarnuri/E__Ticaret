<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use Illuminate\Support\Facades\File;

class AyarController extends Controller
{
 public function genelayarelaveet(Request $request){


    $ayarlar= new Ayarlar();
    $ayarlar->ayar_bashliq=$request->ayar_bashliq;
    $ayarlar->ayar_achiqlama=$request->ayar_achiqlama;
    $ayarlar->ayar_kilidsoz=$request->ayar_kilidsoz;
    $ayarlar->ayar_yazar=$request->ayar_yazar;
    $ayarlar->save();



    return back();

 }
}
