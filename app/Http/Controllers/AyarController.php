<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use Illuminate\Support\Facades\File;

class AyarController extends Controller
{
 public function genelayarelaveet($id, Request $request){


    $ayarlar=Ayarlar::find($id);
    $ayarlar->ayar_bashliq=$request->input('ayar_bashliq');
    $ayarlar->ayar_achiqlama=$request->input('ayar_achiqlama');
    $ayarlar->ayar_kilidsoz=$request->input('ayar_kilidsoz');
    $ayarlar->ayar_yazar=$request->input('ayar_yazar');
    $ayarlar->update();



    return back();

 }
}
